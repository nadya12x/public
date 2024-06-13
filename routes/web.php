<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Buku;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Pinjaman;
use App\Http\Controllers\Pengembalian;
use App\Http\Controllers\Rak;
use App\Http\Controllers\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/Login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/Login', [Login::class, 'index'])->name('login');
    Route::post('/Login/auth', [Login::class, 'authenticate']);

    Route::get('/Login/Register', [Login::class, 'Register']);
    Route::post('/Login/Register', [Login::class, 'registerData']);
});





Route::middleware(['auth'])->group(function () {
    Route::get('/Dashboard', [Dashboard::class, 'index']);

    Route::get('/Buku', [Buku::class, 'index']);
    Route::get('/Buku/Tambah', [Buku::class, 'Tambah']);
    Route::post('/Buku/Insert', [Buku::class, 'Insert']);
    Route::get('/Buku/Edit/{id_buku}', [Buku::class, 'Edit']);
    Route::post('/Buku/update/{id_buku}', [Buku::class, 'update']);
    Route::get('/Buku/Delete/{id_buku}', [Buku::class, 'Delete']);


    Route::get('/Kategori', [Kategori::class, 'index']);
    Route::get('/Kategori/Tambah', [Kategori::class, 'Tambah']);
    Route::post('/Kategori/Insert', [Kategori::class, 'Insert']);
    Route::get('/Kategori/Edit/{id_kategori}', [Kategori::class, 'Edit']);
    Route::post('/Kategori/update/{id_kategori}', [Kategori::class, 'update']);
    Route::get('/Kategori/Delete/{id_kategori}', [Kategori::class, 'Delete']);

    Route::get('/Rak', [Rak::class, 'index']);
    Route::get('/Rak/Tambah', [Rak::class, 'Tambah']);
    Route::post('/Rak/Insert', [Rak::class, 'Insert']);
    Route::get('/Rak/Edit/{id_rak}', [Rak::class, 'Edit']);
    Route::post('/Rak/update/{id_rak}', [Rak::class, 'update']);
    Route::get('/Rak/Delete/{id_rak}', [Rak::class, 'Delete']);

    Route::get('/Pinjaman', [Pinjaman::class, 'index']);
    Route::get('/Pinjaman/Tambah', [Pinjaman::class, 'Tambah']);
    Route::post('/Pinjaman/Insert', [Pinjaman::class, 'Insert']);
    Route::get('/Pinjaman/Edit/{id_pinjaman}', [Pinjaman::class, 'Edit']);
    Route::post('/Pinjaman/update/{id_pinjaman}', [Pinjaman::class, 'update']);
    Route::get('/Pinjaman/Delete/{id_pinjaman}', [Pinjaman::class, 'Delete']);

    Route::get('/Pengembalian', [pengembalian::class, 'index']);
    Route::get('/Pengembalian/Tambah', [Pengembalian::class, 'Tambah']);
    Route::post('/Pengembalian/Insert', [Pengembalian::class, 'Insert']);
    Route::get('/Pengembalian/Edit/{id_pengembalian}', [Pengembalian::class, 'Edit']);
    Route::post('/Pengembalian/update/{id_pengembalian}', [Pengembalian::class, 'update']);
    Route::get('/Pengembalian/Delete/{id_pengembalian}', [Pengembalian::class, 'Delete']);

    Route::get('/Settings', [Login::class, 'settings']);
    Route::post('/Settings/updateData', [Login::class, 'updateUser']);

    Route::get('Logout', [Login::class, 'logout']);


});




