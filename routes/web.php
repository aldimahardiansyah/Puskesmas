<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route untuk menampilkan dashboard admin
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

// Route untuk menampilkan daftar pasien
Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');

// Route untuk menampilkan form tambah pasien
Route::get('/pasien/create', [PasienController::class, 'create'])->middleware('auth');

// Route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store'])->middleware('auth');

// Route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->middleware('auth');

// Route untuk memproses form edit pasien
Route::put('/pasien/{id}', [PasienController::class, 'update'])->middleware('auth');

// Route untuk hapus pasien
Route::delete('/pasien', [PasienController::class, 'destroy'])->middleware('auth');

Auth::routes();
