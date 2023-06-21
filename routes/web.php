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

// Group untuk user yang sudah terautentikasi dan rolenya admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    // Route untuk menampilkan form tambah pasien
    Route::get('/pasien/create', [PasienController::class, 'create']);

    // Route untuk memproses form tambah pasien
    Route::post('/pasien', [PasienController::class, 'store']);

    // Route untuk menghapus data pasien
    Route::delete('/pasien', [PasienController::class, 'destroy']);

    // Route untuk menampilkan form edit pasien
    Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

    // Route untuk memproses form edit pasien
    Route::put('/pasien/{id}', [PasienController::class, 'update']);
});

// Group untuk user yang sudah terautentikasi
Route::group(['middleware' => ['auth']], function () {
    // Route untuk menampilkan daftar pasien
    Route::get('/pasien', [PasienController::class, 'index']);

    // Route untuk menampilkan halaman dashboard
    Route::get('/', [DashboardController::class, 'index']);
});

Auth::routes();
