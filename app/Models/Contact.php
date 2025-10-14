<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contacts";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'is_viewed',
    ];

    /* Na ovaj način jednostavna provjera if ($contact->is_viewed) {...} i ne moram kao if ($contact->is_viewed === true) ili slično,
    isto kao i u samoj formi može <input type="checkbox" wire:model="contact.is_viewed"> i laravel zna da je to boolean */
    protected $casts = [
        'is_viewed' => 'boolean',
    ];

    /* Scope za filtriranje pročitanih i nepročitanih poruka. Na ovaj način više ne moram provjeravati u tabeli
    i tražiti među porukama Contact::where('is_viewed', false) i slično, nego ih pozivam sa
    $unreadContacts = Contact::unread()->get(); u admin panelu */
    public function scopeUnread($query)
    {
        return $query->where('is_viewed', false);
    }
}
