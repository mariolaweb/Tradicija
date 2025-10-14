<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Console\Traits\UsesShoptemplateHelpers;

class InitShopTemplate extends Command
{
    use UsesShoptemplateHelpers;

    protected $signature = 'shoptemplate:init'; //komanda koju pozivam u terminalu sa - php artisan shoptemplate:init
    protected $description = 'Inicijalizuje izabrane modele i migracije za shop projekat';


    public function handle(): int
    {
        // 1. Role sistem (EnumRoles / Spatie)
        if ($this->createUserRoleSystem() === self::FAILURE) {
            return self::FAILURE;
        }

        // 2. Kreiranje kategorija
        if ($this->createCategoryModel() === self::FAILURE) {
            return self::FAILURE;
        }

        // 3. Osnovni Product modeli (bez zavisnosti)
        if ($this->createProductModel() === self::FAILURE) {
            return self::FAILURE;
        }

        // Kasnije možeš dodati logiku za:
        // - brand
        // - tag
        // - dodatna migracija za brand_id, category_id, itd.

        return self::SUCCESS;
    }


    protected function createUserRoleSystem(): int
    {
        $roleSystem = $this->choice(
            'Koji sistem upravljanja korisničkim ulogama želiš koristiti?',
            ['EnumRoles', 'SpatiePermissions'],
            0
        );

        if ($roleSystem === 'EnumRoles') {
            // 1. Kreiraj Enums direktorijum ako ne postoji, poziva se helpers metoda
            $this->ensureDirectory(app_path('Enums'));

            // 2. UserRole enum klasa
            $enumPath = app_path('Enums/UserRole.php');
            if (! File::exists($enumPath)) {
                $this->safeCopy(
                    base_path('stubs/shoptemplate/enums/UserRole.stub'),
                    $enumPath
                );
            } else {
                $this->warn('⚠️ Enums/UserRole.php već postoji — preskačem.');
            }

            // 3. Migracija: add_role_to_users_table
            if (! $this->migrationExists('add_role_to_users_table')) {
                $timestamp = now()->format('Y_m_d_His');
                $this->safeCopy(
                    base_path('stubs/shoptemplate/migrations/add_role_to_users_table.stub'),
                    database_path("migrations/{$timestamp}_add_role_to_users_table.php")
                );
            } else {
                $this->warn('⚠️ Migracija `add_role_to_users_table` već postoji — preskačem.');
            }

            $this->info('✅ Enum bazirani sistem za korisničke uloge je spreman.');
        }

        if ($roleSystem === 'SpatiePermissions') {
            if (! class_exists(\Spatie\Permission\PermissionServiceProvider::class)) {
                $this->error('❌ Spatie Laravel Permission paket nije instaliran.');
                $this->warn('➡️ Instaliraj ga: composer require spatie/laravel-permission');
                return self::FAILURE;
            }

            $this->info('✅ Spatie Permission sistem je detektovan — možeš nastaviti s konfiguracijom.');

            // (ovdje možeš kasnije dodati kopiranje stubova i setup Livewire komponenata)
        }

        return self::SUCCESS;
    }

    protected function createCategoryModel(): int
    {
        $options = [
            'CategoryBasicMono',
            'CategoryBasicMultilang',
            'CategoryTreeMono',
            'CategoryTreeMultilang',
        ];

        $choice = $this->choice(
            'Koji tip Category modela želiš koristiti?',
            $options,
            0
        );

        $isMultilang = str_contains($choice, 'Multilang');
        $isTree = str_contains($choice, 'Tree');

        // ❗ Blokira ako je izabran Multilang a nema paketa
        if ($isMultilang && ! interface_exists(\Astrotomic\Translatable\Contracts\Translatable::class)) {
            $this->error("❌ Odabrana opcija '{$choice}' zahtijeva Astrotomic Translatable paket.");
            $this->warn('➡️ Instaliraj ga: composer require astrotomic/laravel-translatable');
            return self::FAILURE;
        }

        // ✅ Ako je multilang, kopiraj jezičke ikone
        if ($isMultilang) {
            $from = base_path('stubs/lang-icons');
            $to   = public_path('images/svg');

            if (! File::exists($to)) {
                File::makeDirectory($to, 0755, true);
            }

            // Kopiraj samo ako još nisu kopirane
            if (! File::exists($to . '/bs.svg')) {
                File::copyDirectory($from, $to);
                $this->info("✅ Jezičke ikone kopirane u public/images/svg");
            } else {
                $this->warn("⚠️ Jezičke ikone već postoje — preskačem kopiranje.");
            }


            // 1.  Kreiraj Localization middleware
            $middlewareDest = app_path('Http/Middleware/Localization.php');
            $middlewareStub = base_path('stubs/shoptemplate/middleware/Localization.stub');

            // osiguraj da postoji folder
            $this->ensureDirectory(dirname($middlewareDest));

            if (! File::exists($middlewareDest)) {
                $this->safeCopy($middlewareStub, $middlewareDest);
                $this->info("✅ Localization middleware kreiran.");
            } else {
                $this->warn("⚠️ Localization middleware već postoji — preskačem.");
            }

            // 🔹 2. Pitanje za update bootstrap/app.php
            if ($this->confirm('Želiš li da automatski dodam Localization middleware u bootstrap/app.php?', true)) {
                $appPhp = base_path('bootstrap/app.php');
                $backup = base_path('bootstrap/app.php.bak');
                $stub   = base_path('stubs/shoptemplate/bootstrap/app_multilang.stub');

                if (! File::exists($backup)) {
                    File::copy($appPhp, $backup);
                    $this->info("✅ Backup app.php kreiran kao app.php.bak");
                }

                File::copy($stub, $appPhp);
                $this->info("✅ bootstrap/app.php ažuriran za multilang middleware");

                $this->line('');
                $this->warn("➡️ Sada sve rute treba staviti u {locale} prefiks grupu:");
                $this->line("    Route::prefix('{locale}')->group(function() {");
                $this->line("        // vaše rute");
                $this->line("    });");
                $this->line('');
            } else {
                $this->warn("⚠️ Preskočeno automatsko ažuriranje app.php. Dodaj middleware ručno u web grupu.");
                $this->line('');
                $this->warn("➡️ I dalje važi da sve rute trebaju biti u {locale} prefiks grupi.");
                $this->line("    Route::prefix('{locale}')->group(function() { ... });");
                $this->line('');
            }

            // 4️⃣ “Buton”/CLI potvrda za nastavak inicijalizacije
            if (! $this->confirm('✅ Ako ste podesili rute u web.php fajlu, sve gore navedeno je odrađeno. Nastavljam sa init procesom?', true)) {
                $this->warn('⏸ InitShopTemplate pauziran dok ne dovršiš ručne korake.');
                return self::FAILURE;
            }
        }

        // Translation model uvijek isto ime
        $modelName = 'Category';
        $modelPath = app_path("Models/{$modelName}.php");

        // Translation model uvijek isto ime
        $translationModelName = 'CategoryTranslation';
        $translationModelPath = app_path("Models/{$translationModelName}.php");

        // Putanje
        $modelStubDir = base_path('stubs/shoptemplate/models/');
        $migrationStubDir = base_path('stubs/shoptemplate/migrations/');
        $livewireStubDir   = base_path('stubs/shoptemplate/livewire/admin/');

        // 1. Model
        $stubPath = "{$modelStubDir}{$choice}.stub";
        if (! File::exists($stubPath)) {
            $this->warn("⚠️ Stub za model {$choice} ne postoji — preskačem.");
        } elseif (! File::exists($modelPath)) {
            $this->safeCopy($stubPath, $modelPath);
            $this->info("✅ Kreiran model: {$modelName}.php");
        } else {
            $this->warn("⚠️ {$modelName}.php već postoji — preskačem.");
        }

        // 2. Translation model ako treba
        if ($isMultilang) {
            $stubPath = "{$modelStubDir}CategoryTranslation.stub";
            if (! File::exists($stubPath)) {
                $this->warn("⚠️ Stub za {$translationModelName} ne postoji — preskačem.");
            } elseif (! File::exists($translationModelPath)) {
                $this->safeCopy($stubPath, $translationModelPath);
                $this->info("✅ Kreiran model: {$translationModelName}.php");
            } else {
                $this->warn("⚠️ {$translationModelName}.php već postoji — preskačem.");
            }
        }

        // 3. Migracija za kategorije
        if (! $this->migrationExists('create_categories_table')) {
            $migrationStub = match ($choice) {
                'CategoryBasicMono' => 'create_categories_table_basic_mono.stub',
                'CategoryBasicMultilang' => 'create_categories_table_basic_multilang.stub',
                'CategoryTreeMono' => 'create_categories_table_tree_mono.stub',
                'CategoryTreeMultilang' => 'create_categories_table_tree_multilang.stub',
            };

            $timestamp = now()->format('Y_m_d_His');
            $stubPath = "{$migrationStubDir}{$migrationStub}";
            if (! File::exists($stubPath)) {
                $this->warn("⚠️ Stub migracije {$migrationStub} ne postoji — preskačem.");
            } else {
                $this->safeCopy($stubPath, database_path("migrations/{$timestamp}_create_categories_table.php"));
                $this->info("✅ Migracija za kategorije kreirana.");
            }
        } else {
            $this->warn('⚠️ Migracija za `categories` tabelu već postoji — preskačem.');
        }

        if ($isMultilang && ! $this->migrationExists('create_category_translations_table')) {
            $translationStub = 'create_category_translations_table.stub';

            $timestamp = now()->addSecond()->format('Y_m_d_His');
            $stubPath = "{$migrationStubDir}{$translationStub}";

            if (! File::exists($stubPath)) {
                $this->warn("⚠️ Stub migracije {$translationStub} ne postoji — preskačem.");
            } else {
                $this->safeCopy($stubPath, database_path("migrations/{$timestamp}_create_category_translations_table.php"));
                $this->info("✅ Migracija za category_translations kreirana.");
            }
        } elseif ($isMultilang) {
            $this->warn('⚠️ Migracija za `category_translations` tabelu već postoji — preskačem.');
        }

        // 5. Livewire admin komponenta
        $livewireMap = [
            'CategoryBasicMono' => [
                'classStub' => 'AdminCategoriesMono.stub',
                'viewStub'  => 'admin-categories-mono.blade.stub',
            ],
            'CategoryBasicMultilang' => [
                'classStub' => 'AdminCategoriesMultilang.stub',
                'viewStub'  => 'admin-categories-multilang.blade.stub',
            ],
            'CategoryTreeMono' => [
                'classStub' => 'AdminCategoriesTreeMono.stub',
                'viewStub'  => 'admin-categories-tree-mono.blade.stub',
            ],
            'CategoryTreeMultilang' => [
                'classStub' => 'AdminCategoriesTreeMultilang.stub',
                'viewStub'  => 'admin-categories-tree-multilang.blade.stub',
            ],
        ];

        if (isset($livewireMap[$choice])) {
            $map = $livewireMap[$choice];
            $classDest = app_path('Livewire/Admin/AdminCategories.php');
            $viewDest  = resource_path('views/livewire/admin/admin-categories.blade.php');

            $this->ensureDirectory(dirname($classDest));
            $this->ensureDirectory(dirname($viewDest));

            // Kopiranje Livewire klase
            $classStub = "{$livewireStubDir}{$map['classStub']}";
            if (! File::exists($classStub)) {
                $this->warn("⚠️ Stub za Livewire klasu {$map['classStub']} ne postoji — preskačem.");
            } elseif (! File::exists($classDest)) {
                $this->safeCopy($classStub, $classDest);
            } else {
                $this->warn("⚠️ Livewire klasa već postoji — preskačem.");
            }

            // Kopiranje Blade fajla
            $viewStub = "{$livewireStubDir}{$map['viewStub']}";
            if (! File::exists($viewStub)) {
                $this->warn("⚠️ Stub za Livewire view {$map['viewStub']} ne postoji — preskačem.");
            } elseif (! File::exists($viewDest)) {
                $this->safeCopy($viewStub, $viewDest);
            } else {
                $this->warn("⚠️ Livewire view već postoji — preskačem.");
            }

            $this->info("✅ Livewire admin komponenta za {$choice} kreirana.");

            $this->line('');
            $this->warn('➡️ Sada dodaj odgovarajuću rutu u web.php za ovu komponentu.');
            $this->line("   Npr: Route::get('admin/categories', \\App\\Livewire\\Admin\\AdminCategories::class);");
            $this->line('');

            if (! $this->confirm('✅ Jesi li dodao rutu ili zabilježio gdje ćeš je dodati?')) {
                $this->warn('⏸ Komanda je prekinuta dok ne dodaš rutu.');
                return self::FAILURE;
            }

            $this->line('▶️ Nastavljam sa sljedećim korakom inicijalizacije...');
        }

        $this->info("✅ Modeli i migracije za kategorije ({$choice}) uspješno kreirani.");
        return self::SUCCESS;
    }

    protected function createProductModel(): int
    {
        $categoryModelPath = app_path('Models/Category.php');
        if (! File::exists($categoryModelPath)) {
            $this->error('❌ Ne možeš kreirati Product model dok ne postoji Category.php.');
            $this->warn('⚠️ Prvo pokreni `createCategoryModel()` logiku unutar inicijalizacije.');
            return self::FAILURE;
        }

        $choice = $this->choice(
            'Koji tip Product modela želiš koristiti?',
            ['ProductMono', 'ProductMultilang'],
            0
        );

        $modelStubDir = base_path("stubs/shoptemplate/models/");
        $migrationStubDir = base_path("stubs/shoptemplate/migrations/");
        $modelPath = app_path("Models/Product.php");

        $isMultilang = $choice === 'ProductMultilang';

        // Multilang zaštita
        if ($isMultilang && ! class_exists(\Astrotomic\Translatable\Translatable::class)) {
            $this->error('❌ Odabrana opcija zahtijeva Astrotomic Translatable paket.');
            $this->warn('➡️ Instaliraj ga: composer require astrotomic/laravel-translatable');
            return self::FAILURE;
        }

        // 1. Product.php
        if (File::exists($modelPath)) {
            $this->error("🚫 Product.php već postoji. Ne mogu kreirati {$choice} preko postojećeg modela.");
            $this->warn('🧹 Obriši ručno Product.php i ponovo pokreni init ako želiš koristiti ovu verziju.');
            return self::FAILURE;
        }

        $this->safeCopy("{$modelStubDir}{$choice}.stub", $modelPath);

        // 2. ProductTranslation.php ako je multilang
        if ($isMultilang) {
            $translationModelPath = app_path("Models/ProductTranslation.php");
            if (! File::exists($translationModelPath)) {
                $this->safeCopy("{$modelStubDir}ProductTranslation.stub", $translationModelPath);
            } else {
                $this->warn('⚠️ ProductTranslation.php već postoji — preskačem.');
            }
        }

        // 3. Migracije
        if (! $this->migrationExists('create_products_table')) {
            $migrationStub = $isMultilang
                ? 'create_products_table_multilang.stub'
                : 'create_products_table_mono.stub';

            $timestamp = now()->format('Y_m_d_His');
            $this->safeCopy("{$migrationStubDir}{$migrationStub}", database_path("migrations/{$timestamp}_create_products_table.php"));
        } else {
            $this->warn('⚠️ Migracija za `products` tabelu već postoji — preskačem.');
        }

        // 4. ProductTranslations migracija ako je multilang
        if ($isMultilang && ! $this->migrationExists('create_product_translations_table')) {
            $timestamp = now()->addSecond()->format('Y_m_d_His');
            $this->safeCopy(
                "{$migrationStubDir}create_product_translations_table.stub",
                database_path("migrations/{$timestamp}_create_product_translations_table.php")
            );
        } elseif ($isMultilang) {
            $this->warn('⚠️ Migracija za `product_translations` tabelu već postoji — preskačem.');
        }

        $this->info("✅ Product modeli i migracije ({$choice}) uspješno kreirani.");
        return self::SUCCESS;
    }
}
