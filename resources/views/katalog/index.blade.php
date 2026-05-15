@extends('layouts.app')

@section('title', 'Menu Ramen')

@section('content')

    {{-- Hero Section --}}
    <div class="bg-red-900 text-white rounded-3xl p-10 mb-10 shadow-xl">

        <h1 class="text-5xl font-bold mb-3">
            Nekovina Ramen
        </h1>

        <p class="text-red-100 text-xl">
            Nikmati ramen hangat dengan cita rasa khas Jepang modern.
        </p>

    </div>

    {{-- Judul --}}
    <div class="mb-8">

        <h2 class="text-4xl font-bold text-red-950 mb-2">
            Menu Ramen Favorit
        </h2>

        <p class="text-lg text-slate-600">
            Pilihan ramen terbaik dengan topping premium dan kuah autentik.
        </p>

    </div>

    {{-- Search --}}
    <div class="mb-8">

        <form action="/katalog" method="GET" class="flex gap-4">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari menu ramen..."
                class="w-full border border-red-200 rounded-2xl px-5 py-3">

            <button
                type="submit"
                class="bg-red-700 hover:bg-red-800
                       text-white px-6 py-3 rounded-2xl">

                Cari

            </button>

        </form>

    </div>

    {{-- Tombol Tambah --}}
    <div class="mb-8">

        <a href="/katalog/create"
   class="bg-red-700 hover:bg-red-800
          text-white px-6 py-3 rounded-2xl
          text-lg font-semibold shadow-lg
          transition duration-300">

    + Tambah Menu

</a>

    </div>

    {{-- Alert Success --}}
    @if(session('success'))

        <div class="bg-green-100 border border-green-300
                    text-green-700 px-6 py-4 rounded-2xl mb-8">

            {{ session('success') }}

        </div>

    @endif

    {{-- Grid Menu --}}
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

                        {{ $item->kategori }}

                    </span>

                </div>

                {{-- Body Card --}}
                <div class="p-6">

                    <h2 class="text-3xl font-bold text-slate-800 mb-4">

                        {{ $item->nama }}

                    </h2>

                    <p class="text-red-700 font-bold text-4xl mb-4">

                        Rp {{ number_format($item->harga, 0, ',', '.') }}

                    </p>

                    <p class="text-slate-600 mb-6">

                        {{ $item->deskripsi }}

                    </p>

                    {{-- Tombol Detail --}}
                    <a href="/katalog/{{ $item->id }}"
                       class="inline-block bg-red-700 hover:bg-red-800
                              text-white px-6 py-3 rounded-2xl
                              text-lg font-semibold transition duration-300">

                        Lihat Detail

                    </a>

                    {{-- Tombol Edit & Delete --}}
                    <div class="flex gap-3 mt-4">

                        <a href="/katalog/{{ $item->id }}/edit"
                           class="bg-yellow-500 hover:bg-yellow-600
                                  text-white px-4 py-2 rounded-xl">

                            Edit

                        </a>

                        <form action="/katalog/{{ $item->id }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin hapus menu ramen ini?')"
                                class="bg-red-700 hover:bg-red-800
                                       text-white px-4 py-2 rounded-xl">

                                Hapus

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    {{-- Pagination --}}
    <div class="mt-10">

        {{ $produk->links() }}

    </div>

@endsection