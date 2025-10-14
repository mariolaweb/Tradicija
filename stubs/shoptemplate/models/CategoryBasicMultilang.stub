<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements ContractsTranslatable
{
    use Translatable;

    protected $fillable = [
        'cat_image',
    ];

    /**
     * Polja koja se prevode.
     */
    public $translatedAttributes = [
        'name',
        'slug',
        // 'description',
        'meta_description',
        'meta_keywords',
    ];
}
