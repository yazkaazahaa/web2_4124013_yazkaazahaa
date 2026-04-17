@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-10">
        <h1 class="text-4xl font-bold text-slate-800 mb-6">Detail Produk</h1>

        <div class="space-y-4 text-xl text-slate-700">
            <p><span class="font-semibold">Nama Produk:</span> {{ $produk['nama'] }}</p>
            <p><span class="font-semibold">Kategori:</span> {{ $produk['kategori'] }}</p>
            <p><span class="font-semibold">Harga:</span> Rp {{ number_format($produk['harga'], 0, ',', '.') }}</p>
            <p><span class="font-semibold">Deskripsi:</span> {{ $produk['deskripsi'] }}</p>
        </div>

        <a href="/katalog"
           class="inline-block mt-8 bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-xl text-lg font-semibold transition">
            Kembali ke katalog
        </a>
    </div>
@endsection