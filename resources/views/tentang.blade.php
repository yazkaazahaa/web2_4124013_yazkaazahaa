@extends('layouts.app')

@section('title', 'Tentang')

@section('content')

    {{-- Hero --}}
    <section class="bg-gradient-to-r from-red-900 to-red-700
                    text-white rounded-3xl shadow-2xl
                    p-12 text-center mb-10">

        <h1 class="text-5xl font-bold mb-5">
            Tentang Nekovina Ramen
        </h1>

        <p class="text-xl text-red-100 max-w-4xl mx-auto leading-relaxed">
            Nekovina Ramen adalah aplikasi pemesanan menu ramen digital
            berbasis Laravel dan Tailwind CSS yang dibuat untuk mempermudah
            pelanggan dalam memesan makanan langsung dari meja melalui sistem QR Menu.
        </p>

    </section>

    {{-- Feature --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Card 1 --}}
        <div class="bg-white border border-red-100
                    rounded-3xl shadow-lg p-8">

            <div class="text-5xl mb-4">
                🍜
            </div>

            <h2 class="text-3xl font-bold text-red-900 mb-4">
                Menu Ramen
            </h2>

            <p class="text-lg text-slate-600 leading-relaxed">
                Menyediakan berbagai pilihan ramen autentik Jepang
                dengan topping premium dan level pedas yang beragam.
            </p>

        </div>

        {{-- Card 2 --}}
        <div class="bg-white border border-red-100
                    rounded-3xl shadow-lg p-8">

            <div class="text-5xl mb-4">
                📱
            </div>

            <h2 class="text-3xl font-bold text-red-900 mb-4">
                Digital QR Menu
            </h2>

            <p class="text-lg text-slate-600 leading-relaxed">
                Pelanggan dapat memesan langsung melalui smartphone
                dengan scan QR di meja tanpa perlu menunggu pelayan.
            </p>

        </div>

        {{-- Card 3 --}}
        <div class="bg-white border border-red-100
                    rounded-3xl shadow-lg p-8">

            <div class="text-5xl mb-4">
                ⚡
            </div>

            <h2 class="text-3xl font-bold text-red-900 mb-4">
                Modern UI
            </h2>

            <p class="text-lg text-slate-600 leading-relaxed">
                Dibangun menggunakan Laravel Blade dan Tailwind CSS
                dengan tampilan modern, responsif, dan mudah digunakan.
            </p>

        </div>

    </section>

@endsection