<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Yazkaa Zahaa Dzakiyah',
            'nim' => '4124013',
            'prodi' => 'Sistem Informasi',
            'semester' => 4,
            'keahlian' => ['Memasak Ramen', 'Fotografi Makanan', 'Pemasaran Online']
        ];

        return view('profil', $data);
    }

    public function show($nim)
    {
        return "<h1>Profil Mahasiswa NIM: $nim</h1>";
    }
}