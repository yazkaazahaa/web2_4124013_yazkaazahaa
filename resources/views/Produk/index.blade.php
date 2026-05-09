@extends('layouts.app')

@section('title', 'Daftar Menu')

@section('content')

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10 gap-6">

        <div>

            <h1 class="text-5xl font-bold text-red-950 mb-3">
                Daftar Menu Ramen
            </h1>

            <p class="text-xl text-slate-600">
                Pilihan ramen autentik khas Nekovina Ramen.
            </p>

        </div>

        {{-- Button --}}
        <a href="/produk/create"
           class="bg-red-700 hover:bg-red-800
                  text-white px-6 py-3 rounded-2xl
                  text-lg font-semibold shadow-lg
                  transition duration-300">

            + Tambah Menu

        </a>

    </div>

    {{-- Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($produk as $item)

            <div class="bg-white border border-red-100
                        rounded-3xl shadow-lg overflow-hidden
                        hover:shadow-2xl hover:-translate-y-1
                        transition duration-300">

                {{-- Header Card --}}
                <div class="bg-gradient-to-r from-red-700 to-red-900 p-5">

                    <span class="bg-white/20 text-white
                                 text-sm px-4 py-2 rounded-full">

                        Menu Ramen

                    </span>

                </div>

                {{-- Body --}}
                <div class="p-6">

                    <h2 class="text-3xl font-bold text-slate-800 mb-3">
                        {{ $item->nama }}
                    </h2>

                    <p class="text-slate-600 text-lg mb-5 leading-relaxed">
                        {{ $item->deskripsi }}
                    </p>

                    <p class="text-red-700 font-bold text-4xl mb-6">
                        Rp {{ number_format($item->harga, 0, ',', '.') }}
                    </p>

                    {{-- Action --}}
                    <div class="flex gap-3">

                        <a href="#"
                           class="inline-block bg-red-700 hover:bg-red-800
                                  text-white px-5 py-3 rounded-2xl
                                  text-lg font-semibold transition duration-300">

                            Detail

                        </a>

                        <button
                            class="bg-slate-200 hover:bg-slate-300
                                   text-slate-800 px-5 py-3 rounded-2xl
                                   text-lg font-semibold transition duration-300">

                            Pesan

                        </button>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

@endsection