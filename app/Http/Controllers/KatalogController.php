<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KatalogController extends Controller
{
    // Menampilkan daftar menu ramen
    public function index(Request $request)
    {
        $search = $request->search;

        $produk = Produk::when($search, function ($query, $search) {

                $query->where('nama', 'LIKE', "%{$search}%")
                      ->orWhere('kategori', 'LIKE', "%{$search}%");

            })
            ->latest()
            ->paginate(3);

        return view('katalog.index', [
            'produk' => $produk
        ]);
    }

    // Menampilkan form tambah ramen
    public function create()
    {
        return view('katalog.create');
    }

    // Menyimpan menu ramen baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'aktif' => true,
        ]);

        return redirect('/katalog')
                ->with('success', 'Menu ramen berhasil ditambahkan');
    }

    // Menampilkan detail menu ramen
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('katalog.show', [
            'produk' => $produk
        ]);
    }
}