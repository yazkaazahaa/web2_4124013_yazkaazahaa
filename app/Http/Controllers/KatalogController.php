<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Ramen Original', 'harga' => 25000],
            ['id' => 2, 'nama' => 'Ramen Spicy', 'harga' => 28000],
            ['id' => 3, 'nama' => 'Ramen Seafood', 'harga' => 32000],
            ['id' => 4, 'nama' => 'Ramen Chicken', 'harga' => 27000],
            ['id' => 5, 'nama' => 'Ramen Beef', 'harga' => 35000]
        ];

        // Sesuaikan view dengan folder katalog
        return view('katalog.index', ['produk' => $produk]);
    }

    // Menampilkan detail produk
    public function show($id)
    {
        $produk = [
            1 => ['id' => 1, 'nama' => 'Ramen Original', 'harga' => 25000],
            2 => ['id' => 2, 'nama' => 'Ramen Spicy', 'harga' => 28000],
            3 => ['id' => 3, 'nama' => 'Ramen Seafood', 'harga' => 32000],
            4 => ['id' => 4, 'nama' => 'Ramen Chicken', 'harga' => 27000],
            5 => ['id' => 5, 'nama' => 'Ramen Beef', 'harga' => 35000]
        ];

        if (!isset($produk[$id])) {
            return "<h1>Produk tidak ditemukan</h1>";
        }

        // Sesuaikan view dengan folder katalog
        return view('katalog.show', ['produk' => $produk[$id]]);
    }
}