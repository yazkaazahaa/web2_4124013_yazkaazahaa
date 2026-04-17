@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-5xl font-bold text-slate-800 mb-2">Daftar Produk</h1>
            <p class="text-2xl text-slate-600">Pilihan menu ramen yang tersedia.</p>
        </div>

        <a href="/produk/create"
           class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-xl text-lg font-semibold transition">
            + Tambah Produk
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($produk as $item)
            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6">
                <h2 class="text-3xl font-bold text-slate-800 mb-3">{{ $item->nama }}</h2>

                <p class="text-slate-600 text-lg mb-4">{{ $item->deskripsi }}</p>

                <p class="text-teal-600 font-bold text-4xl mb-6">
                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                </p>

                <a href="#"
                   class="inline-block bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-xl text-lg font-semibold transition">
                    Detail
                </a>
            </div>
        @endforeach
    </div>
@endsection