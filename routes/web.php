<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
// オンボーディング画面
Route::get('/onboarding/index', function () {
    return view('onboarding.index');
})->name('onboarding.index');
// オンボーディング：家族メンバー登録画面
Route::get('/onboarding/member-create', function () {
    return view('onboarding.member-create');
})->name('onboarding.member-create');
// オンボーディング：家族メンバー編集画面
Route::get('/onboarding/member-edit', function() {
    return view('onboarding.member-edit');
})->name('onboarding.member-edit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';
