<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::truncate();

        $data = [

            [
                'nama' => 'Spicy Jigoku Ramen',
                'harga' => 32000,
                'stok' => 20,
                'kategori' => 'Spicy Ramen',
                'deskripsi' => 'Ramen pedas khas Jepang dengan kuah rich spicy miso.',
                'aktif' => true,
            ],

            [
                'nama' => 'Tokyo Chashu Ramen',
                'harga' => 35000,
                'stok' => 15,
                'kategori' => 'Signature Ramen',
                'deskripsi' => 'Ramen autentik dengan topping chashu lembut khas Tokyo.',
                'aktif' => true,
            ],

            [
                'nama' => 'Kuro Curry Ramen',
                'harga' => 34000,
                'stok' => 10,
                'kategori' => 'Curry Ramen',
                'deskripsi' => 'Ramen kuah kari creamy dengan aroma rempah Jepang.',
                'aktif' => true,
            ],

            [
                'nama' => 'Ebi Volcano Ramen',
                'harga' => 39000,
                'stok' => 8,
                'kategori' => 'Seafood Ramen',
                'deskripsi' => 'Ramen seafood premium dengan sensasi pedas volcano.',
                'aktif' => true,
            ],

            [
                'nama' => 'Miso Dragon Ramen',
                'harga' => 36000,
                'stok' => 12,
                'kategori' => 'Miso Ramen',
                'deskripsi' => 'Kuah miso gurih dengan topping telur ajitsuke.',
                'aktif' => true,
            ],

        ];

        foreach ($data as $d) {
            Produk::create($d);
        }
    }
}