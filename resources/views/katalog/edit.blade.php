@extends('layouts.app')

@section('title', 'Edit Menu Ramen')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="bg-red-900 text-white rounded-3xl p-10 mb-8 shadow-xl">

        <h1 class="text-5xl font-bold mb-3">
            Edit Menu Ramen
        </h1>

        <p class="text-red-100 text-xl">
            Update menu ramen Nekovina Ramen.
        </p>

    </div>

    <div class="bg-white border border-red-100
                rounded-3xl shadow-xl p-10">

        <form action="/katalog/{{ $produk->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Nama Menu
                </label>

                <input
                    type="text"
                    name="nama"
                    value="{{ $produk->nama }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Harga
                </label>

                <input
                    type="number"
                    name="harga"
                    value="{{ $produk->harga }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Stok
                </label>

                <input
                    type="number"
                    name="stok"
                    value="{{ $produk->stok }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            <div class="mb-6">

                <label class="block text-lg font-semibold mb-2">
                    Kategori
                </label>

                <input
                    type="text"
                    name="kategori"
                    value="{{ $produk->kategori }}"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">

            </div>

            <div class="mb-8">

                <label class="block text-lg font-semibold mb-2">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="w-full border border-red-200
                           rounded-2xl px-5 py-3">{{ $produk->deskripsi }}</textarea>

            </div>

            <div class="flex gap-4">

                <a href="/katalog"
                   class="bg-slate-200 hover:bg-slate-300
                          text-slate-800 px-6 py-3 rounded-2xl">

                    Kembali

                </a>

                <button
                    type="submit"
                    class="bg-red-700 hover:bg-red-800
                           text-white px-6 py-3 rounded-2xl">

                    Update Menu

                </button>

            </div>

        </form>

    </div>

</div>

@endsection