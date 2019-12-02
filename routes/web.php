<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/ppdb', function () {
    return view('form');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard/tatausaha', function () {
    return view('dashtu');
});

Route::get('/dashboard/tatausaha/calon-siswa', function () {
    return view('tucalonsiswa');
});

Route::get('/dashboard/tatausaha/siswa-acc', function () {
    return view('tusiswaacc');
});

Route::get('/dashboard/tatausaha/kelas-siswa', function () {
    return view('tukelas');
});

Route::get('/dashboard/tatausaha/guru/bahasa', function () {
    return view('mapelindo');
});

Route::get('/dashboard/tatausaha/guru/agama', function () {
    return view('mapelagama');
});

Route::get('/dashboard/tatausaha/guru/pkn', function () {
    return view('mapelpkn');
});

Route::get('/dashboard/tatausaha/guru/sejarah', function () {
    return view('mapelsjr');
});

Route::get('/dashboard/tatausaha/guru/matematika', function () {
    return view('mapelmtk');
});