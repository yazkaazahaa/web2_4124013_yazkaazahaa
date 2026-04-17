@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-white rounded-2xl shadow-md p-10 mb-8">
        <h1 class="text-5xl font-bold text-slate-800 mb-4">
            Laravel + Blade + Tailwind CSS
        </h1>
        <p class="text-xl text-slate-600 mb-8">
            Project latihan Pemrograman Web 2 untuk membangun tampilan web modern
            dengan Blade Layout dan Tailwind CSS.
        </p>

        <div class="flex gap-4">
            <a href="/profil" class="bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-xl font-semibold transition">
                Lihat Profil
            </a>
            <a href="/katalog" class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-xl font-semibold transition">
                Buka Katalog
            </a>
            <a href="/produk" class="border border-slate-300 hover:bg-slate-100 text-slate-700 px-6 py-3 rounded-xl font-semibold transition">
                Lihat Produk
            </a>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-3">Blade Layout</h2>
            <p class="text-slate-600">
                Semua halaman memakai layout yang sama agar konsisten dan rapi.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-3">Tailwind CSS</h2>
            <p class="text-slate-600">
                Tampilan dibuat modern dengan utility class yang cepat dan fleksibel.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-2xl font-bold text-slate-800 mb-3">Responsive UI</h2>
            <p class="text-slate-600">
                Halaman tetap enak dilihat di mobile maupun desktop.
            </p>
        </div>
    </section>
@endsection