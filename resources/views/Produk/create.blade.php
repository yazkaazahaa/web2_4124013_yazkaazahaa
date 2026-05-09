@extends('layouts.app')

@section('title', 'Tambah Menu Ramen')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">

        <h1 class="text-5xl font-bold text-red-950 mb-3">
            Tambah Menu Ramen
        </h1>

        <p class="text-xl text-slate-600">
            Tambahkan menu ramen baru ke dalam katalog Nekovina Ramen.
        </p>

    </div>

    {{-- Form --}}
    <form action="/produk/create" method="POST"
          class="bg-white border border-red-100
                 rounded-3xl shadow-xl p-10 space-y-6">

        @csrf

        {{-- Nama --}}
        <div>

            <label class="block text-lg font-semibold text-slate-700 mb-2">
                Nama Ramen
            </label>

            <input
                type="text"
                name="nama"
                placeholder="Contoh: Spicy Miso Ramen"
                class="w-full border border-slate-200 rounded-2xl
                       px-5 py-4 text-lg
                       focus:outline-none
                       focus:ring-2 focus:ring-red-500"
            >

            @error('nama')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- Harga --}}
        <div>

            <label class="block text-lg font-semibold text-slate-700 mb-2">
                Harga
            </label>

            <input
                type="number"
                name="harga"
                placeholder="Masukkan harga ramen"
                class="w-full border border-slate-200 rounded-2xl
                       px-5 py-4 text-lg
                       focus:outline-none
                       focus:ring-2 focus:ring-red-500"
            >

            @error('harga')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- Kategori --}}
        <div>

            <label class="block text-lg font-semibold text-slate-700 mb-2">
                Kategori
            </label>

            <input
                type="text"
                name="kategori"
                placeholder="Pedas / Seafood / Original"
                class="w-full border border-slate-200 rounded-2xl
                       px-5 py-4 text-lg
                       focus:outline-none
                       focus:ring-2 focus:ring-red-500"
            >

            @error('kategori')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- Deskripsi --}}
        <div>

            <label class="block text-lg font-semibold text-slate-700 mb-2">
                Deskripsi Menu
            </label>

            <textarea
                name="deskripsi"
                rows="5"
                placeholder="Masukkan deskripsi menu ramen"
                class="w-full border border-slate-200 rounded-2xl
                       px-5 py-4 text-lg
                       focus:outline-none
                       focus:ring-2 focus:ring-red-500"></textarea>

            @error('deskripsi')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- Button --}}
        <button
            type="submit"
            class="bg-red-700 hover:bg-red-800
                   text-white px-8 py-4 rounded-2xl
                   text-lg font-semibold shadow-lg
                   transition duration-300">

            Simpan Menu

        </button>

    </form>

</div>

@endsection