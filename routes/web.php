<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil', [
        'nama' => 'Yazka Azahaa',
        'nim' => '4124013',
        'prodi' => 'Sistem Informasi',
        'semester' => 4,
        'keahlian' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'MySQL']
    ]);
});
Route::get('/katalog', function () {
    $produk = [
        [
            'id' => 1,
            'nama' => 'Ramen Ayam Original',
            'harga' => 18000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen kuah gurih dengan topping ayam original.'
        ],
        [
            'id' => 2,
            'nama' => 'Ramen Spicy Beef',
            'harga' => 22000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen pedas dengan irisan daging sapi lembut.'
        ],
        [
            'id' => 3,
            'nama' => 'Ramen Kari Jepang',
            'harga' => 20000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen kuah kari khas Jepang yang creamy dan nikmat.'
        ],
        [
            'id' => 4,
            'nama' => 'Ramen Seafood',
            'harga' => 25000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen dengan topping seafood segar dan kuah spesial.'
        ],
        [
            'id' => 5,
            'nama' => 'Ramen Chashu',
            'harga' => 24000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen dengan irisan chashu empuk dan bumbu khas.'
        ],
        [
            'id' => 6,
            'nama' => 'Ramen Tempura',
            'harga' => 23000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen lezat disajikan dengan tempura renyah.'
        ],
    ];

    return view('katalog.index', compact('produk'));
});

Route::get('/katalog/{id}', function ($id) {
    $produk = [
        1 => [
            'id' => 1,
            'nama' => 'Ramen Ayam Original',
            'harga' => 18000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen kuah gurih dengan topping ayam original.'
        ],
        2 => [
            'id' => 2,
            'nama' => 'Ramen Spicy Beef',
            'harga' => 22000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen pedas dengan irisan daging sapi lembut.'
        ],
        3 => [
            'id' => 3,
            'nama' => 'Ramen Kari Jepang',
            'harga' => 20000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen kuah kari khas Jepang yang creamy dan nikmat.'
        ],
        4 => [
            'id' => 4,
            'nama' => 'Ramen Seafood',
            'harga' => 25000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen dengan topping seafood segar dan kuah spesial.'
        ],
        5 => [
            'id' => 5,
            'nama' => 'Ramen Chashu',
            'harga' => 24000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen dengan irisan chashu empuk dan bumbu khas.'
        ],
        6 => [
            'id' => 6,
            'nama' => 'Ramen ayam katsu',
            'harga' => 24000,
            'kategori' => 'Ramen',
            'deskripsi' => 'Ramen lezat disajikan dengan tempura renyah.'
        ],
    ];

    if (!isset($produk[$id])) {
        abort(404);
    }

    return view('katalog.show', [
        'produk' => $produk[$id]
    ]);
});

Route::get('/produk', function () {
    $produk = [
        (object)[
            'id' => 1,
            'nama' => 'Ramen Ayam Original',
            'harga' => 18000,
            'deskripsi' => 'Ramen kuah gurih dengan topping ayam original.'
        ],
        (object)[
            'id' => 2,
            'nama' => 'Ramen Spicy Beef',
            'harga' => 22000,
            'deskripsi' => 'Ramen pedas dengan irisan daging sapi lembut.'
        ],
        (object)[
            'id' => 3,
            'nama' => 'Ramen Kari Jepang',
            'harga' => 20000,
            'deskripsi' => 'Ramen kuah kari khas Jepang yang creamy dan nikmat.'
        ],
        (object)[
            'id' => 4,
            'nama' => 'Ramen Seafood',
            'harga' => 25000,
            'deskripsi' => 'Ramen dengan topping seafood segar dan kuah spesial.'
        ],
        (object)[
            'id' => 5,
            'nama' => 'Ramen Chashu',
            'harga' => 24000,
            'deskripsi' => 'Ramen dengan irisan chashu empuk dan bumbu khas.'
        ],
        (object)[
            'id' => 6,
            'nama' => 'Ramen ayam katsu',
            'harga' => 24000,
            'deskripsi' => 'Ramen lezat disajikan dengan tempura renyah.'
        ],
    ];

    return view('produk.index', compact('produk'));
});

Route::get('/produk/create', function () {
    return view('produk.create');
});