<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

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

        'nama' => 'Yazka Azahaa',
        'nim' => '4124013',
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
| KATALOG RAMEN (DATABASE)
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

/*
|--------------------------------------------------------------------------
| PRODUK LAMA
|--------------------------------------------------------------------------
*/

Route::get('/produk', function () {

    $produk = [

        (object)[
            'id' => 1,
            'nama' => 'Spicy Jigoku Ramen',
            'harga' => 32000,
            'deskripsi' => 'Ramen pedas khas Jepang dengan kuah rich spicy miso.'
        ],

        (object)[
            'id' => 2,
            'nama' => 'Tokyo Chashu Ramen',
            'harga' => 35000,
            'deskripsi' => 'Ramen autentik dengan topping chashu lembut khas Tokyo.'
        ],

        (object)[
            'id' => 3,
            'nama' => 'Kuro Curry Ramen',
            'harga' => 34000,
            'deskripsi' => 'Ramen kuah kari creamy dengan aroma rempah Jepang.'
        ],

        (object)[
            'id' => 4,
            'nama' => 'Ebi Volcano Ramen',
            'harga' => 39000,
            'deskripsi' => 'Ramen seafood premium dengan sensasi pedas volcano.'
        ],

        (object)[
            'id' => 5,
            'nama' => 'Miso Dragon Ramen',
            'harga' => 36000,
            'deskripsi' => 'Kuah miso gurih dengan telur ajitsuke dan nori premium.'
        ],

        (object)[
            'id' => 6,
            'nama' => 'Tempura Fusion Ramen',
            'harga' => 38000,
            'deskripsi' => 'Ramen modern dengan tempura renyah dan kuah spesial.'
        ],

    ];

    return view('produk.index', compact('produk'));

});

Route::get('/produk/create', function () {
    return view('produk.create');
});

Route::post('/produk/create', function () {

    return redirect('/produk');

});