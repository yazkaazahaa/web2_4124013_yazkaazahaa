@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')

    <div class="max-w-3xl mx-auto">

        {{-- Header --}}
        <div class="mb-10">

            <h1 class="text-5xl font-bold text-red-950 mb-3">
                Edit Berita
            </h1>

            <p class="text-xl text-slate-600">
                Perbarui informasi berita Nekovina Ramen.
            </p>

        </div>

        {{-- Error --}}
        @if($errors->any())

            <div class="bg-red-100 border border-red-300
                        text-red-800 px-5 py-4 rounded-2xl mb-8">

                <ul class="list-disc pl-5 space-y-2">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        {{-- Form --}}
        <form action="{{ route('berita.update', $berita->id) }}"
              method="POST"
              class="bg-white rounded-3xl shadow-lg p-8 space-y-6">

            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div>

                <label class="block text-lg font-semibold text-slate-700 mb-2">
                    Judul Berita
                </label>

                <input type="text"
                       name="judul"
                       value="{{ old('judul', $berita->judul) }}"
                       class="w-full border border-slate-300 rounded-2xl
                              px-5 py-3 focus:outline-none
                              focus:ring-2 focus:ring-red-400">

            </div>

            {{-- Penulis --}}
            <div>

                <label class="block text-lg font-semibold text-slate-700 mb-2">
                    Penulis
                </label>

                <input type="text"
                       name="penulis"
                       value="{{ old('penulis', $berita->penulis) }}"
                       class="w-full border border-slate-300 rounded-2xl
                              px-5 py-3 focus:outline-none
                              focus:ring-2 focus:ring-red-400">

            </div>

            {{-- Kategori --}}
            <div>

                <label class="block text-lg font-semibold text-slate-700 mb-2">
                    Kategori
                </label>

                <input type="text"
                       name="kategori"
                       value="{{ old('kategori', $berita->kategori) }}"
                       class="w-full border border-slate-300 rounded-2xl
                              px-5 py-3 focus:outline-none
                              focus:ring-2 focus:ring-red-400">

            </div>

            {{-- Isi --}}
            <div>

                <label class="block text-lg font-semibold text-slate-700 mb-2">
                    Isi Berita
                </label>

                <textarea name="isi"
                          rows="8"
                          class="w-full border border-slate-300 rounded-2xl
                                 px-5 py-3 focus:outline-none
                                 focus:ring-2 focus:ring-red-400">{{ old('isi', $berita->isi) }}</textarea>

            </div>

            {{-- Button --}}
            <div class="flex gap-4">

                <button type="submit"
                        class="bg-red-700 hover:bg-red-800
                               text-white px-6 py-3 rounded-2xl
                               font-semibold transition duration-300">

                    Update Berita

                </button>

                <a href="{{ route('berita.index') }}"
                   class="bg-slate-200 hover:bg-slate-300
                          text-slate-800 px-6 py-3 rounded-2xl
                          font-semibold transition duration-300">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection