<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PrizeController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RafflePickController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [EntryController::class, 'create'])->name('entries.create');
Route::get('/entries/create', [EntryController::class, 'create'])->name('entries.create');
Route::post('entries', [EntryController::class, 'store'])->name('entries.store');

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Protected resource routes
    Route::resource('promos', PromoController::class);
    Route::resource('prizes', PrizeController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('validations', ValidationController::class);
    Route::resource('raffle_picks', RafflePickController::class);

    // Protected routes for entries
    Route::get('entries', [EntryController::class, 'index'])->name('entries.index');
    Route::get('entries/{entry}', [EntryController::class, 'show'])->name('entries.show');

    //
    Route::get('users', [HomeController::class, 'getUsersList'])->name('users.list');
    Route::get('users/register', [HomeController::class, 'register'])->name('users.register');
    Route::post('users/create', [HomeController::class, 'createUser'])->name('users.create');
    Route::get('users/edit/{id}', [HomeController::class, 'editUser'])->name('users.edit');
    Route::post('users/update/{id}', [HomeController::class, 'updateUser'])->name('users.update');
    Route::get('users/delete/{id}', [HomeController::class, 'deleteUser'])->name('users.delete');

    // Protected image route
    Route::get('storage/{disk}/{filename}', [ImageController::class, 'show'])->name('storage.show');
});
