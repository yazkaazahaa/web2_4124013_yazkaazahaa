@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

<div class="max-w-3xl mx-auto">

    <h1 class="text-4xl font-bold text-red-900 mb-8">
        Edit Menu Ramen
    </h1>

    {{-- Error --}}
    @if($errors->any())

        <div class="bg-red-100 border border-red-300
                    text-red-800 px-5 py-4 rounded-2xl mb-6">

            <ul class="list-disc pl-5">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    {{-- Form --}}
    <form action="{{ route('produk.update', $produk->id) }}"
          method="POST"
          class="bg-white shadow-xl rounded-3xl p-8 space-y-6">

        @csrf
        @method('PUT')

        {{-- Nama --}}
        <div>

            <label class="block mb-2 font-semibold">
                Nama Produk
            </label>

            <input type="text"
                   name="nama"
                   value="{{ old('nama', $produk->nama) }}"
                   class="w-full border border-slate-300
                          rounded-2xl px-5 py-3">

        </div>

        {{-- Harga --}}
        <div>

            <label class="block mb-2 font-semibold">
                Harga
            </label>

            <input type="number"
                   name="harga"
                   value="{{ old('harga', $produk->harga) }}"
                   class="w-full border border-slate-300
                          rounded-2xl px-5 py-3">

        </div>

        {{-- Stok --}}
        <div>

            <label class="block mb-2 font-semibold">
                Stok
            </label>

            <input type="number"
                   name="stok"
                   value="{{ old('stok', $produk->stok) }}"
                   class="w-full border border-slate-300
                          rounded-2xl px-5 py-3">

        </div>

        {{-- Kategori --}}
        <div>

            <label class="block mb-2 font-semibold">
                Kategori
            </label>

            <input type="text"
                   name="kategori"
                   value="{{ old('kategori', $produk->kategori) }}"
                   class="w-full border border-slate-300
                          rounded-2xl px-5 py-3">

        </div>

        {{-- Deskripsi --}}
        <div>

            <label class="block mb-2 font-semibold">
                Deskripsi
            </label>

            <textarea name="deskripsi"
                      rows="5"
                      class="w-full border border-slate-300
                             rounded-2xl px-5 py-3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>

        </div>

        {{-- Button --}}
        <div class="flex gap-4">

            <button type="submit"
                    class="bg-red-700 hover:bg-red-800
                           text-white px-6 py-3 rounded-2xl">

                Update Produk

            </button>

            <a href="{{ route('produk.index') }}"
               class="bg-slate-200 hover:bg-slate-300
                      px-6 py-3 rounded-2xl">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection