@extends('layouts.app')

@section('title', 'Profil')

@section('content')

    {{-- Header --}}
    <div class="mb-8">

        <h1 class="text-5xl font-bold text-red-950 mb-3">
            Profil Kelompok
        </h1>

        <p class="text-xl text-slate-600">
            Informasi kelompok pengembang website Nekovina Ramen.
        </p>

    </div>

    {{-- Card --}}
    <div class="bg-white border border-red-100
                rounded-3xl shadow-xl p-10">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            {{-- Biodata --}}
            <div>

                <div class="flex items-center gap-4 mb-8">

                    <div class="w-16 h-16 rounded-full
                                bg-red-700 text-white
                                flex items-center justify-center
                                text-3xl">

                        👨‍🍳

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold text-red-950">
                            Data Kelompok
                        </h2>

                        <p class="text-slate-500">
                            Web Programming 2 Project
                        </p>

                    </div>

                </div>

                <div class="space-y-5 text-lg text-slate-700">

                    {{-- Kelompok --}}
                    <div class="border-b border-slate-100 pb-3">

                        <span class="font-semibold text-red-900">
                            Kelompok:
                        </span>

                        {{ $kelompok }}

                    </div>

                    {{-- Anggota --}}
                    <div class="border-b border-slate-100 pb-3">

                        <span class="font-semibold text-red-900 block mb-2">
                            Anggota:
                        </span>

                        <ul class="list-disc pl-6">

                            @foreach($anggota as $item)

                                <li>{{ $item }}</li>

                            @endforeach

                        </ul>

                    </div>

                    {{-- NIM --}}
                    <div class="border-b border-slate-100 pb-3">

                        <span class="font-semibold text-red-900 block mb-2">
                            NIM:
                        </span>

                        <ul class="list-disc pl-6">

                            @foreach($nim as $item)

                                <li>{{ $item }}</li>

                            @endforeach

                        </ul>

                    </div>

                    {{-- Prodi --}}
                    <div class="border-b border-slate-100 pb-3">

                        <span class="font-semibold text-red-900">
                            Program Studi:
                        </span>

                        {{ $prodi }}

                    </div>

                    {{-- Semester --}}
                    <div class="border-b border-slate-100 pb-3">

                        <span class="font-semibold text-red-900">
                            Semester:
                        </span>

                        {{ $semester }}

                    </div>

                </div>

            </div>

            {{-- Skill --}}
            <div>

                <h2 class="text-3xl font-bold text-red-950 mb-6">
                    Keahlian
                </h2>

                <div class="space-y-4">

                    @foreach($keahlian as $skill)

                        <div class="bg-red-50 border border-red-100
                                    rounded-2xl px-5 py-4
                                    text-lg text-slate-700
                                    shadow-sm">

                            {{ $skill }}

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection