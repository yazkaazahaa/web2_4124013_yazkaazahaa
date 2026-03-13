<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

/* ROUTE STATIS */

Route::get('/tentang', function () {
    return "<h1>Tentang Usaha Ramen Yazkaa</h1>";
})->name('tentang.index');

Route::get('/kontak', function () {
    return "<h1>Kontak: 08xxxxxxxx</h1>";
})->name('kontak.index');

Route::get('/promo', function () {
    return "<h1>Promo Diskon Ramen 20%</h1>";
})->name('promo.index');


/* ROUTE PROFIL */

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil.index');

Route::get('/profil/{nim}', [ProfilController::class, 'show'])
    ->name('profil.show');


/* ROUTE KATALOG */

Route::get('/katalog', [KatalogController::class, 'index'])
    ->name('katalog.index');

Route::get('/katalog/{id}', [KatalogController::class, 'show'])
    ->name('katalog.show');