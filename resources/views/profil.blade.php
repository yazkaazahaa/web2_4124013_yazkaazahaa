@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="bg-white rounded-2xl shadow-md p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div>
                <h1 class="text-4xl font-bold text-slate-800 mb-6">Profil Mahasiswa</h1>

                <div class="space-y-4 text-xl text-slate-700">
                    <p><span class="font-semibold">Nama:</span> {{ $nama }}</p>
                    <p><span class="font-semibold">NIM:</span> {{ $nim }}</p>
                    <p><span class="font-semibold">Prodi:</span> {{ $prodi }}</p>
                    <p><span class="font-semibold">Semester:</span> {{ $semester }}</p>
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-bold text-slate-800 mb-4">Keahlian</h2>
                <ul class="list-disc ml-6 space-y-3 text-xl text-slate-700">
                    @foreach($keahlian as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection