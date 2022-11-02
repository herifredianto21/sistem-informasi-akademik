<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StatusmhswController;
use App\Models\Statusmhsw;

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

Route::get('/beranda', function () {
    return view('layouts_website/master');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('mhs', MahasiswaController::class);

Route::resource('ruangan', RuanganController::class);

Route::resource('hdr', KehadiranController::class);

Route::resource('ds', DosenController::class);

Route::resource('jrs', JurusanController::class);

Route::resource('statusmhsw', StatusmhswController::class);

Route::resource('kontak', KontakController::class);

// Route::get('/kehadiran', function () {
//     return view('kehadiran.index');
// });

// Route::resource('rng', KehadiranController::class);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('search');
Route::get('/jurusan', [JurusanController::class, 'index'])->name('search');

Route::get('/create', function () {
    return view('mahasiswa.create');
});
Route::get('/edit', function () {
    return view('mahasiswa.edit');
});
Auth::routes();

// Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('/ruangan', [RuanganController::class, 'index'])->name('search');


// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
