@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-red-900 to-red-700
                    text-white rounded-3xl shadow-2xl
                    p-12 mb-10">

        <div class="max-w-3xl">

            <p class="text-red-200 text-lg mb-3">
                Selamat Datang di
            </p>

            <h1 class="text-6xl font-bold mb-6 leading-tight">
                🍜 Nekovina Ramen
            </h1>

            <p class="text-xl text-red-100 mb-8 leading-relaxed">
                Nikmati ramen autentik khas Jepang dengan cita rasa modern.
                Pesan langsung dari meja Anda melalui sistem digital QR Menu.
            </p>

            {{-- Button --}}
            <div class="flex flex-wrap gap-4">

                <a href="/katalog"
                   class="bg-white text-red-800
                          hover:bg-red-100
                          px-6 py-3 rounded-2xl
                          font-semibold text-lg transition">

                    Lihat Menu

                </a>

                <a href="/produk"
                   class="bg-red-950 hover:bg-black
                          text-white px-6 py-3
                          rounded-2xl font-semibold
                          text-lg transition">

                    Pesan Sekarang

                </a>

                <a href="/berita"
                   class="bg-white text-red-800
                          hover:bg-red-100
                          px-6 py-3 rounded-2xl
                          font-semibold text-lg transition">

                    Lihat Berita

                </a>

            </div>

        </div>

    </section>

    {{-- Feature Section --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Card 1 --}}
        <div class="bg-white rounded-3xl shadow-lg p-8 border border-red-100">

            <div class="text-5xl mb-4">
                🍥
            </div>

            <h2 class="text-2xl font-bold text-red-900 mb-3">
                Ramen Premium
            </h2>

            <p class="text-slate-600 leading-relaxed">
                Menggunakan bahan berkualitas dengan kuah autentik khas Jepang.
            </p>

        </div>

        {{-- Card 2 --}}
        <div class="bg-white rounded-3xl shadow-lg p-8 border border-red-100">

            <div class="text-5xl mb-4">
                📱
            </div>

            <h2 class="text-2xl font-bold text-red-900 mb-3">
                Digital QR Menu
            </h2>

            <p class="text-slate-600 leading-relaxed">
                Pesan langsung dari meja dengan sistem scan QR yang cepat dan praktis.
            </p>

        </div>

        {{-- Card 3 --}}
        <div class="bg-white rounded-3xl shadow-lg p-8 border border-red-100">

            <div class="text-5xl mb-4">
                🔥
            </div>

            <h2 class="text-2xl font-bold text-red-900 mb-3">
                Level Pedas
            </h2>

            <p class="text-slate-600 leading-relaxed">
                Pilih level pedas favoritmu mulai dari original hingga extreme spicy.
            </p>

        </div>

    </section>

@endsection