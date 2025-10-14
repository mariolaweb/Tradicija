<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Vlasnik = 'vlasnik';
    case Zaposlenik = 'zaposlenik';
    // case Kupac = 'kupac'; //po potrebi dodati ako nema komplikovanih relacija inače preći na Spatie
    case User = 'user';


    // Ovaj label služi samo ako želim negdje ispisivati uloge na 'ljudski' način, inače ne treba ()
    // Primjer: <td>{{ $user->role->label() }}</td> {{-- Ispisuje: "Administrator" umjesto "admin" --}}
    public function label(): string
    {
        return match($this) {
            self::Admin => 'Administrator',
            self::Vlasnik => 'Vlasnik',
            self::Zaposlenik => 'Zaposlenik',
          //  self::Kupac => 'Kupac',
            self::User => 'Korisnik',
        };
    }
}
