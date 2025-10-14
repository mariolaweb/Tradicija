<?php

namespace App\Models;

use App\Enums\UserRole;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class, // za slučaj da smo izbrali enum pristup za uloge
        ];
    }

    /* Helperi za lakše korištenje u logici i uslovima, pa da onda jednostavno
    @if (auth()->user()?->isAdmin())
       <x-admin.dashboard /> ili šta već?
    @endif
    ... ili jednostavnije kod opcija nekih
    if ($user->isZaposlenik()) {
        // Do something
       }   */
    public function isAdmin(): bool
    {
        return $this->role === UserRole::Admin;
    }

    public function isVlasnik(): bool
    {
        return $this->role === UserRole::Vlasnik;
    }

    public function isZaposlenik(): bool
    {
        return $this->role === UserRole::Zaposlenik;
    }

    // public function isKupac(): bool
    // {
    //     return $this->role === UserRole::Kupac;
    // }

    public function isUser(): bool
    {
        return $this->role === UserRole::User;
    }
}
