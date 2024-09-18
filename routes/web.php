<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PrizeController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RafflePickController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('promos', PromoController::class);
Route::resource('prizes', PrizeController::class);
Route::resource('faqs', FaqController::class);
Route::resource('entries', EntryController::class);
Route::resource('validations', ValidationController::class);
Route::resource('raffle_picks', RafflePickController::class);
Route::resource('admins', AdminController::class);
Route::get('storage/{disk}/{filename}', [ImageController::class, 'show'])->name('storage.show');
