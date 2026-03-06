<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perkenalan', function () {
    return '<h1>Halo! Nama saya Yazkaa Zahaa</h1>
            <p>NIM: 4124013 | Prodi: Sistem Informasi</p>
            <p>Saya siap belajar Laravel!</p>';
});
