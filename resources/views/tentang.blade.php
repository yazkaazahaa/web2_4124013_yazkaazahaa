@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
    <section class="bg-white rounded-2xl shadow-md p-10 text-center mb-8">
        <h1 class="text-5xl font-bold text-slate-800 mb-4">Tentang Project Web2 App</h1>
        <p class="text-2xl text-slate-600 max-w-4xl mx-auto">
            Project ini dibuat untuk latihan Laravel, Blade Template, dan Tailwind CSS
            pada mata kuliah Pemrograman Web 2.
        </p>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Laravel</h2>
            <p class="text-xl text-slate-600">
                Framework PHP modern untuk membangun aplikasi web yang rapi dan terstruktur.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Blade</h2>
            <p class="text-xl text-slate-600">
                Template engine bawaan Laravel yang memudahkan pembuatan view reusable.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Tailwind CSS</h2>
            <p class="text-xl text-slate-600">
                Framework utility-first untuk membuat UI modern, cepat, dan responsif.
            </p>
        </div>
    </section>
@endsection
