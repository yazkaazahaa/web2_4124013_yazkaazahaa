@extends('layouts.app')

@section('title', 'Tambah Menu Ramen')

@section('content')

<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="bg-red-900 text-white rounded-3xl p-10 mb-8 shadow-xl">

        <h1 class="text-5xl font-bold mb-3">
            Tambah Menu Ramen
        </h1>

        <p class="text-red-100 text-xl">
            Tambahkan menu ramen baru ke katalog Nekovina Ramen.
        </p>

    </div>

    {{-- Error Validation --}}
    @if ($errors->any())

        <div class="bg-red-100 border border-red-300
                    text-red-700 px-6 py-4 rounded-2xl mb-6">

            <ul class="list-disc pl-5">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    {{-- Form --}}
    <div class="bg-white border border-red-100
                rounded-3xl shadow-xl p-10">

        <form action="/katalog" method="POST">

            @csrf

            {{-- Nama --}}
            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Nama Menu
                </label>

                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            {{-- Harga --}}
            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Harga
                </label>

                <input
                    type="number"
                    name="harga"
                    value="{{ old('harga') }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            {{-- Stok --}}
            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Stok
                </label>

                <input
                    type="number"
                    name="stok"
                    value="{{ old('stok') }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            {{-- Kategori --}}
            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Kategori
                </label>

                <input
                    type="text"
                    name="kategori"
                    value="{{ old('kategori') }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            {{-- Deskripsi --}}
            <div class="mb-8">

                <label class="block text-lg font-semibold mb-2">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">{{ old('deskripsi') }}</textarea>

            </div>

            {{-- Tombol --}}
            <div class="flex gap-4">

                <a href="/katalog"
                   class="bg-slate-200 hover:bg-slate-300
                          text-slate-800 px-6 py-3 rounded-2xl
                          text-lg font-semibold transition">

                    Kembali

                </a>

                <button
                    type="submit"
                    class="bg-red-700 hover:bg-red-800
                           text-white px-6 py-3 rounded-2xl
                           text-lg font-semibold transition">

                    Simpan Menu

                </button>

            </div>

        </form>

    </div>

</div>

@endsection