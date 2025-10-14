<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Room extends Model implements ContractsTranslatable
{
    use Translatable;

    protected $fillable = [
        'inventory_count',
        'base_price',
        'holiday_price',
        'is_holiday_active',
        'is_active',
    ];

    public $translatedAttributes = [
        'name',
        'slug',
        'description',
        'meta_description',
        'meta_keywords',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Helper za aktivnu cijenu (holiday vs base)
    public function getActivePriceAttribute(): ?string
    {
        if ($this->is_holiday_active && !is_null($this->holiday_price)) {
            return $this->holiday_price;
        }
        return $this->base_price;
    }

    // Jednostavan scope ako zatreba
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
