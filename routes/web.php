<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| PROFIL
|--------------------------------------------------------------------------
*/

Route::get('/profil', function () {
return view('profil', [

    'kelompok' => 'Kelompok 4',

    'anggota' => [
        'Yazkaa Zahaa',
        'Uhti Amelia',
        'Yanis Kamil'
    ],

    'nim' => [
        '4124013',
        '4124011',
        '4124012'
    ],

    'prodi' => 'Sistem Informasi',

    'semester' => 4,

    'keahlian' => [
        'Laravel',
        'Tailwind CSS',
        'Desain Web'
    ]

]);

});

/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/

Route::get('/tentang', function () {
    return view('tentang');
});

/*
|--------------------------------------------------------------------------
| KATALOG RAMEN CRUD
|--------------------------------------------------------------------------
*/

// Menampilkan semua menu ramen
Route::get('/katalog', [KatalogController::class, 'index']);

// Form tambah menu ramen
Route::get('/katalog/create', [KatalogController::class, 'create']);

// Simpan menu ramen baru
Route::post('/katalog', [KatalogController::class, 'store']);

// Detail menu ramen
Route::get('/katalog/{id}', [KatalogController::class, 'show']);

// Form edit menu ramen
Route::get('/katalog/{id}/edit', [KatalogController::class, 'edit']);

// Update menu ramen
Route::put('/katalog/{id}', [KatalogController::class, 'update']);

// Hapus menu ramen
Route::delete('/katalog/{id}', [KatalogController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| PRODUK DATABASE
|--------------------------------------------------------------------------
*/

Route::resource('produk', ProdukController::class);

/*
|--------------------------------------------------------------------------
| BERITA DATABASE
|--------------------------------------------------------------------------
*/

Route::resource('berita', BeritaController::class);