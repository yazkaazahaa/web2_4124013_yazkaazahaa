<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/* ================= PROFIL ================= */
Route::get('/profil', function () {
    return view('profil', [
        'nama' => 'Yazka',
        'nim' => '4124013',
        'prodi' => 'Sistem Informasi',
        'semester' => 4,
        'keahlian' => ['HTML', 'CSS', 'Laravel']
    ]);
});


/* ================= KATALOG ================= */
Route::get('/katalog', function () {
    $produk = [
        ['id'=>1,'nama'=>'Ramen Ayam','harga'=>15000],
        ['id'=>2,'nama'=>'Ramen Sapi','harga'=>20000],
    ];
    return view('katalog.index', compact('produk'));
});

Route::get('/katalog/{id}', function ($id) {
    $produk = [
        1 => ['id'=>1,'nama'=>'Ramen Ayam','harga'=>15000],
        2 => ['id'=>2,'nama'=>'Ramen Sapi','harga'=>20000],
    ];

    return view('katalog.show', [
        'produk' => $produk[$id] ?? null
    ]);
});


/* ================= PRODUK (LATIHAN 3) ================= */
Route::get('/produk', function () {
    $produk = [
        (object)['id'=>1,'nama'=>'Ramen Ayam','harga'=>15000,'deskripsi'=>'Enak'],
        (object)['id'=>2,'nama'=>'Ramen Sapi','harga'=>20000,'deskripsi'=>'Mantap'],
        (object)['id'=>3,'nama'=>'Ramen Seafood','harga'=>25000,'deskripsi'=>'Lezat'],
    ];

    return view('produk.index', compact('produk'));
});

Route::get('/produk/create', function () {
    return view('produk.create');
});