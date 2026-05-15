@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10 gap-6">

        <div>

            <h1 class="text-5xl font-bold text-red-950 mb-3">
                Berita Nekovina
            </h1>

            <p class="text-xl text-slate-600">
                Informasi terbaru seputar ramen dan promo Nekovina.
            </p>

        </div>

        {{-- Button --}}
        <a href="{{ route('berita.create') }}"
           class="bg-red-700 hover:bg-red-800
                  text-white px-6 py-3 rounded-2xl
                  text-lg font-semibold shadow-lg
                  transition duration-300">

            + Tambah Berita

        </a>

    </div>

    {{-- Search --}}
    <form method="GET"
          action="{{ route('berita.index') }}"
          class="mb-10 flex gap-3">

        <input type="text"
               name="q"
               value="{{ request('q') }}"
               placeholder="Cari berita..."
               class="w-full border border-red-200 rounded-2xl
                      px-5 py-3 focus:outline-none
                      focus:ring-2 focus:ring-red-400">

        <button type="submit"
                class="bg-red-700 hover:bg-red-800
                       text-white px-6 py-3 rounded-2xl
                       font-semibold transition duration-300">

            Cari

        </button>

    </form>

    {{-- Flash Message --}}
    @if(session('success'))

        <div class="bg-green-100 border border-green-300
                    text-green-800 px-5 py-4 rounded-2xl mb-8">

            {{ session('success') }}

        </div>

    @endif

    {{-- Grid --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        @forelse($berita as $item)

            <div class="bg-white border border-red-100
                        rounded-3xl shadow-lg overflow-hidden
                        hover:shadow-2xl transition duration-300">

                {{-- Header --}}
                <div class="bg-gradient-to-r from-red-700 to-red-900 p-5">

                    <span class="bg-white/20 text-white
                                 text-sm px-4 py-2 rounded-full">

                        {{ $item->kategori ?? 'Berita' }}

                    </span>

                </div>

                {{-- Body --}}
                <div class="p-6">

                    <h2 class="text-3xl font-bold text-slate-800 mb-4">
                        {{ $item->judul }}
                    </h2>

                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        {{ Str::limit($item->isi, 150) }}
                    </p>

                    <div class="flex items-center justify-between mb-6">

                        <p class="text-slate-500">
                            Penulis:
                            <span class="font-semibold">
                                {{ $item->penulis }}
                            </span>
                        </p>

                    </div>

                    {{-- Action --}}
                    <div class="flex flex-wrap gap-3">

                        <a href="{{ route('berita.show', $item->id) }}"
                           class="bg-red-700 hover:bg-red-800
                                  text-white px-5 py-3 rounded-2xl
                                  font-semibold transition duration-300">

                            Detail

                        </a>

                        <a href="{{ route('berita.edit', $item->id) }}"
                           class="bg-yellow-400 hover:bg-yellow-500
                                  text-black px-5 py-3 rounded-2xl
                                  font-semibold transition duration-300">

                            Edit

                        </a>

                        <form action="{{ route('berita.destroy', $item->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus berita ini?')"
                                    class="bg-slate-200 hover:bg-slate-300
                                           text-slate-800 px-5 py-3 rounded-2xl
                                           font-semibold transition duration-300">

                                Hapus

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-span-2 text-center py-20">

                <h2 class="text-3xl font-bold text-slate-400 mb-3">
                    Belum ada berita
                </h2>

                <p class="text-slate-500">
                    Tambahkan berita baru untuk mulai mengisi halaman berita.
                </p>

            </div>

        @endforelse

    </div>

    {{-- Pagination --}}
    <div class="mt-10">
        {{ $berita->withQueryString()->links() }}
    </div>

@endsection