<?php

namespace App\Models;

use App\Enums\BookingStatus;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id',
        'customer_id',
        'status',
        'source',
        'check_in',
        'check_out',
        'total_price',
        'notes',
    ];

    protected $casts = [
        'check_in'  => 'date',
        'check_out' => 'date',
        'status'    => BookingStatus::class,
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
