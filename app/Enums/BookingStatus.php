<?php

namespace App\Enums;

enum BookingStatus: string
{
    case Pending   = 'pending';
    case Confirmed = 'confirmed';
    case Cancelled = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::Pending   => 'Na čekanju',
            self::Confirmed => 'Potvrđeno',
            self::Cancelled => 'Otkazano',
        };
    }
}
