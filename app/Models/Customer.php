<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'city',
        'postal_code',
        'address_line',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Koristan accessor za prikaz punog imena
    public function getFullNameAttribute(): string
    {
        return trim($this->first_name.' '.$this->last_name);
    }
}
