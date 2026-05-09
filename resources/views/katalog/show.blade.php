@extends('layouts.app')

@section('title', 'Detail Ramen')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- Hero Detail --}}
    <div class="bg-gradient-to-r from-red-800 to-red-950
                rounded-3xl p-10 text-white shadow-2xl mb-8">

        <p class="text-red-200 text-lg mb-2">
            Menu Pilihan Nekovina Ramen
        </p>

        <h1 class="text-5xl font-bold">
            {{ $produk->nama }}
        </h1>

    </div>

    {{-- Detail Card --}}
    <div class="bg-white border border-red-100
                rounded-3xl shadow-xl p-10">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Informasi --}}
            <div class="space-y-6">

                <div>
                    <p class="text-sm text-slate-500 mb-1">
                        Kategori
                    </p>

                    <span class="bg-red-100 text-red-700
                                 px-4 py-2 rounded-full text-sm font-semibold">

                        {{ $produk->kategori }}

                    </span>
                </div>

                <div>
                    <p class="text-sm text-slate-500 mb-1">
                        Harga
                    </p>

                    <h2 class="text-4xl font-bold text-red-700">
                        Rp {{ number_format($produk->harga, 0, ',', '.') }}
                    </h2>
                </div>

                <div>
                    <p class="text-sm text-slate-500 mb-1">
                        Stok
                    </p>

                    <p class="text-lg font-semibold text-slate-700">
                        {{ $produk->stok }}
                    </p>
                </div>

            </div>

            {{-- Deskripsi --}}
            <div>

                <p class="text-sm text-slate-500 mb-2">
                    Deskripsi Menu
                </p>

                <p class="text-lg text-slate-700 leading-relaxed">
                    {{ $produk->deskripsi }}
                </p>

            </div>

        </div>

        {{-- Tombol --}}
        <div class="mt-10 flex gap-4">

            <a href="/katalog"
               class="bg-slate-200 hover:bg-slate-300
                      text-slate-800 px-6 py-3 rounded-2xl
                      text-lg font-semibold transition">

                Kembali

            </a>

            <button
                class="bg-red-700 hover:bg-red-800
                       text-white px-6 py-3 rounded-2xl
                       text-lg font-semibold transition">

                Pesan Sekarang

            </button>

        </div>

    </div>

</div>

@endsection