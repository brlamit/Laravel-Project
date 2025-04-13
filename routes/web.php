<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');
    Route::get('/about-us', function () {
        return view('about-us');
    })->name('about-us');
    Route::get('/contact-us', function () {
        return view('contact-us');
    })->name('contact-us');
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    Route::get('/contact.submit', function () {
        return view('contact.submit');
    })->name('contact.submit');
    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');
    Route::get('/explore', function () {
        return view('explore');
    })->name('explore');
    Route::get('/explore/{id}', function ($id) {
        return view('explore.show', ['id' => $id]);
    })->name('explore.show');
    Route::get('/search', function () {
        return view('search');
    })->name('search');
});

