@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-bold text-slate-800 mb-8">Tambah Produk</h1>

        <form action="#" method="POST" class="bg-white rounded-2xl shadow-md p-10 space-y-6">
            @csrf

            <div>
                <label class="block text-lg font-semibold text-slate-700 mb-2">Nama Produk</label>
                <input type="text" name="nama" placeholder="Masukkan nama produk"
                       class="w-full border border-slate-200 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-lg font-semibold text-slate-700 mb-2">Harga</label>
                <input type="number" name="harga" placeholder="Masukkan harga"
                       class="w-full border border-slate-200 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                @error('harga')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-lg font-semibold text-slate-700 mb-2">Kategori</label>
                <input type="text" name="kategori" placeholder="Masukkan kategori"
                       class="w-full border border-slate-200 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                @error('kategori')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-lg font-semibold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="5" placeholder="Masukkan deskripsi produk"
                          class="w-full border border-slate-200 rounded-xl px-5 py-4 text-lg focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="bg-teal-500 hover:bg-teal-600 text-white px-8 py-4 rounded-xl text-lg font-semibold transition">
                Simpan Produk
            </button>
        </form>
    </div>
@endsection