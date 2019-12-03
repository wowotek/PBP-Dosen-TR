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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'Controller@show');

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/ppdb', function () {
    return view('form');
});

Route::get('/ppdb/confirm', function () {
    return view('biosiswa');
});

Route::get('/login', function () {
    return view('login');
});

// Dashboard TU
Route::get('/dashboard/tatausaha', function () {
    return view('dashtu');
});

Route::get('/dashboard/tatausaha/calon-siswa', function () {
    return view('tucalonsiswa');
});

Route::get('/dashboard/tatausaha/wali-kelas', function () {
    return view('tuwalikelas');
});

Route::get('/dashboard/tatausaha/kelas-siswa', function () {
    return view('tusiswakelas');
});

Route::get('/dashboard/tatausaha/guru-mapel', function () {
    return view('tumapel');
});

// Dashboard Guru
Route::get('/dashboard/guru', function () {
    return view('dashguru');
});

Route::get('/dashboard/guru/kelas', function () {
    return view('dashgurumapel');
});

Route::get('/dashboard/guru/wali', function () {
    return view('dashguruwali');
});

Route::get('/dashboard/guru/wali/confirm', function () {
    return view('dashwaliadv');
});

// Dashboard Siswa

Route::get('/dashboard/siswa/raport', function () {
    return view('dashsiswa');
});
