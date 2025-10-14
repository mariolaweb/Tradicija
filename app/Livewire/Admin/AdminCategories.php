<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\CategoryTranslation;

class AdminCategories extends Component
{
    public $modelId;
    public $selectedCategory;
    public $activeTab;

    #[Validate('required|array')]
    public $name = [];
    #[Validate('nullable|array')]
    public $meta_description = [];
    #[Validate('nullable|array')]
    public $meta_keywords = [];

    public $cat_image;

    public function saveCategory()
    {
        $this->validate();

        $data = [
            'cat_image' => $this->cat_image,
        ];

        if ($this->modelId) {
            $category = Category::findOrFail($this->modelId);
            $category->update($data);
            session()->flash('message', 'Kategorija ažurirana');
        } else {
            $category = Category::create($data);
            session()->flash('message', 'Nova kategorija kreirana');
        }

        // Translation logika
        foreach (config('translatable.locales') as $locale) {
            if (!empty($this->name[$locale])) {
                CategoryTranslation::updateOrCreate(
                    [
                        'category_id' => $category->id,
                        'locale' => $locale,
                    ],
                    [
                        'name' => $this->name[$locale],
                        'slug' => Str::slug($this->name[$locale]),
                        'meta_description' => $this->meta_description[$locale] ?? null,
                        'meta_keywords' => $this->meta_keywords[$locale] ?? null,
                    ]
                );
            }
        }

        $this->resetForm();
        $this->js("window.dispatchEvent(new CustomEvent('close-modal', { detail: 'create-category' }))");
    }

    public function resetForm()
    {
        $this->reset([
            'modelId',
            'name',
            'cat_image',
            'meta_description',
            'meta_keywords',
        ]);
    }

    public function loadModel($id)
    {
        $category = Category::findOrFail($id);

        $this->modelId = $category->id;
        $this->cat_image = $category->cat_image;

        foreach (config('translatable.locales') as $locale) {
            $this->name[$locale] = $category->translate($locale)?->name ?? '';
            $this->meta_description[$locale] = $category->translate($locale)?->meta_description ?? '';
            $this->meta_keywords[$locale] = $category->translate($locale)?->meta_keywords ?? '';
        }

        $this->js("window.dispatchEvent(new CustomEvent('open-modal', { detail: 'create-category' }))");
    }

    public function confirmDelete($id)
    {
        $this->modelId = $id;
        $this->js("window.dispatchEvent(new CustomEvent('open-modal', { detail: 'delete-category' }))");
    }

    public function deleteCategory()
    {
        Category::destroy($this->modelId);
        $this->js("window.dispatchEvent(new CustomEvent('close-modal', { detail: 'delete-category' }))");
        session()->flash('message', 'Uspješno ste obrisali kategoriju');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $categories = Category::all(); // Basic = flat lista
        return view('livewire.admin.admin-categories', compact('categories'));
    }
}
