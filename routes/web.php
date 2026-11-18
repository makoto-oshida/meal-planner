<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/onboarding/index', function () {
    return view('onboarding.index');
})->name('onboarding.index');

Route::get('/onboarding/member-create', function () {
    return view('onboarding.member-create');
})->name('onboarding.member-create');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';
