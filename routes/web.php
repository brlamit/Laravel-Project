<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourPackageController;

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
    Route::get('/packageadder', fn() => view('packageadder'))->name('packageadder');

// Add the 'packages' route
Route::get('/packages', [TourPackageController::class, 'index'])->name('packages');

Route::get('/tour-packages', [TourPackageController::class, 'index'])->name('tourpackages.index');
Route::get('/tour-packages/create', [TourPackageController::class, 'create'])->name('tourpackages.create');
Route::post('/tour-packages', [TourPackageController::class, 'store'])->name('tourpackages.store');
Route::get('/tour-packages', [TourPackageController::class, 'index'])->name('tourpackages.index');
    Route::get('/conference', function () {
        return view('conference');
    })->name('conference');
    Route::get('/conference/{id}', function ($id) {
        return view('conference.show', ['id' => $id]);
    })->name('conference.show');
    Route::get('/packages/create', function () {
        return view('packages.create');
    })->name('packages.create');
    Route::post('/packages', function () {
        // Handle the form submission for creating a package
        return redirect()->route('packages.index')->with('success', 'Package created successfully!');
    })->name('packages.store');
    Route::get('/packages/{id}', function ($id) {
        return view('packages.show', ['id' => $id]);
    })->name('packages.show');
});

