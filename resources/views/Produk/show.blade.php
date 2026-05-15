@extends('layouts.app')

@section('title', $produk->nama)

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- Back --}}
    <div class="mb-6">

        <a href="{{ route('produk.index') }}"
           class="text-red-700 hover:text-red-900 font-semibold">

            ← Kembali ke Menu

        </a>

    </div>

    {{-- Card --}}
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

        {{-- Header --}}
        <div class="bg-gradient-to-r from-red-700 to-red-900 p-8">

            <span class="bg-white/20 text-white
                         text-sm px-4 py-2 rounded-full">

                {{ $produk->kategori ?? 'Menu Ramen' }}

            </span>

            <h1 class="text-5xl font-bold text-white mt-5">
                {{ $produk->nama }}
            </h1>

            <p class="text-red-100 mt-4 text-lg">

                Stok tersedia:
                <span class="font-semibold">
                    {{ $produk->stok }}
                </span>

            </p>

        </div>

        {{-- Body --}}
        <div class="p-8">

            <p class="text-slate-700 text-xl leading-relaxed mb-8">

                {{ $produk->deskripsi }}

            </p>

            <div class="text-5xl font-bold text-red-700">

                Rp {{ number_format($produk->harga, 0, ',', '.') }}

            </div>

        </div>

    </div>

</div>

@endsection