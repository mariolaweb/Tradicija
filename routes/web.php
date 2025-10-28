<?php

use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\ContactPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\AdminCategories;
use App\Livewire\Admin\AdminContactMessages;

/*
Svaki posjet domeni bez locale segmenta (domena.com/) odmah preusmjeri na domena.com/bs
 (ili koji god je app()->getLocale() u trenutku). Time se osigurava da prvi segment uvijek
 bude jezik i zato middleware nikad ne dobije nevalidan segment.
 */
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')
    ->where(['locale' => implode('|', config('translatable.locales'))]) // stroga provjera jezika
    ->middleware(['web', 'localization'])
    ->group(function () {

        // prebacujemo auth rute u ovu grupu ruta.
        require __DIR__ . '/auth.php';

        Route::get('/', HomePage::class)->name('home');
        Route::get('/contact-us', ContactPage::class)->name('contact-us');

        Route::view('/cuisine', 'pages.cuisine')->name('cuisine');
        Route::view('/about', 'pages.about')->name('about');
        Route::view('/faq', 'pages.faq')->name('faq');
        Route::view('/gallery', 'pages.gallery')->name('gallery');
        Route::view('/terms', 'pages.terms')->name('terms');
        Route::view('/privacy', 'pages.privacy')->name('privacy');
        Route::view('/cookies', 'pages.cookies')->name('cookies');
    });

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Route::middleware(['auth'])->group(function () {

    Route::view('/profile', 'profile')->name('profile');

    Route::middleware('verified')->group(function () {

        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::get('admin/admin-categories', AdminCategories::class)->name('admin-categories');
        Route::get('admin/admin-messages', AdminContactMessages::class)->name('admin-emails');

        // Sve ostale admin rute ide ovdje kasnije:
        // Route::get('/admin/contact-messages', ContactMessages::class)->name('admin.contacts');
    });
});


// require __DIR__ . '/auth.php';
