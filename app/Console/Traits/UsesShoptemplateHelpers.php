<?php

namespace App\Console\Traits;

use Illuminate\Support\Facades\File;

trait UsesShoptemplateHelpers
{
    protected function safeCopy(string $from, string $to): void
    {
        if (File::exists($to)) {
            $this->warn("⚠️ Fajl već postoji i neće biti prepisan: " . str_replace(base_path(), '', $to));
            return;
        }
        File::copy($from, $to);
        $this->info("✅ Kreiran fajl: " . str_replace(base_path(), '', $to));
    }

    protected function migrationExists(string $name): bool
    {
        $files = File::files(database_path('migrations'));
        foreach ($files as $file) {
            if (str_contains($file->getFilename(), $name)) {
                return true;
            }
        }
        return false;
    }

    protected function ensureDirectory(string $path): void
    {
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
            $this->info("📁 Kreiran direktorij: {$path}");
        }
    }
}
