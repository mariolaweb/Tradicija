<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomTranslation extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'meta_description',
        'meta_keywords',
    ];
}
