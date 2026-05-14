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

    // Form tambah ramen
    public function create()
    {
        return view('katalog.create');
    }

    // Simpan ramen baru
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

    // Detail ramen
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('katalog.show', [
            'produk' => $produk
        ]);
    }

    // Form edit ramen
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('katalog.edit', [
            'produk' => $produk
        ]);
    }

    // Update ramen
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        $produk = Produk::findOrFail($id);

        $produk->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/katalog')
                ->with('success', 'Menu ramen berhasil diupdate');
    }

    // Hapus ramen
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return redirect('/katalog')
                ->with('success', 'Menu ramen berhasil dihapus');
    }
}