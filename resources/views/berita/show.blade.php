@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

    <div class="max-w-4xl mx-auto">

        {{-- Back --}}
        <div class="mb-6">

            <a href="{{ route('berita.index') }}"
               class="inline-flex items-center gap-2
                      text-red-700 hover:text-red-900
                      font-semibold transition">

                ← Kembali ke Berita

            </a>

        </div>

        {{-- Card --}}
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

            {{-- Header --}}
            <div class="bg-gradient-to-r from-red-700 to-red-900 p-8">

                <span class="bg-white/20 text-white
                             text-sm px-4 py-2 rounded-full">

                    {{ $berita->kategori ?? 'Berita' }}

                </span>

                <h1 class="text-5xl font-bold text-white mt-5 leading-tight">
                    {{ $berita->judul }}
                </h1>

                <p class="text-red-100 mt-4 text-lg">

                    Ditulis oleh
                    <span class="font-semibold">
                        {{ $berita->penulis }}
                    </span>

                </p>

            </div>

            {{-- Content --}}
            <div class="p-8">

                <div class="prose prose-lg max-w-none text-slate-700 leading-relaxed">

                    {!! nl2br(e($berita->isi)) !!}

                </div>

            </div>

        </div>

    </div>

@endsection