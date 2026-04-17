@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
    <div class="mb-8">
        <h1 class="text-5xl font-bold text-slate-800 mb-2">Katalog Produk</h1>
        <p class="text-2xl text-slate-600">Daftar produk ramen pilihan terbaik.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($produk as $item)
            <div class="bg-white rounded-2xl shadow hover:shadow-xl transition p-6">
                <div class="mb-4">
                    <span class="bg-slate-100 text-slate-500 text-sm px-4 py-2 rounded-full">
                        {{ $item['kategori'] }}
                    </span>
                </div>

                <h2 class="text-3xl font-bold text-slate-800 mb-4">
                    {{ $item['nama'] }}
                </h2>

                <p class="text-teal-600 font-bold text-4xl mb-6">
                    Rp {{ number_format($item['harga'], 0, ',', '.') }}
                </p>

                <a href="/katalog/{{ $item['id'] }}"
                   class="inline-block bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-xl text-lg font-semibold transition">
                    Detail
                </a>
            </div>
        @endforeach
    </div>
@endsection