<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ContractController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jabatan', [PositionController::class, 'index'])->name('jabatan');
Route::get('/tambah-jabatan', [PositionController::class, 'create'])->name('tambahJabatan');
Route::get('/edit-jabatan/{id}', [PositionController::class, 'edit'])->name('editJabatan');
Route::post('/update-jabatan/{id}', [PositionController::class, 'update'])->name('updateJabatan');
Route::post('/simpan-jabatan', [PositionController::class, 'store'])->name('simpanJabatan');
Route::get('/hapus-jabatan/{id}', [PositionController::class, 'destroy'])->name('hapusJabatan');

Route::get('/kontrak', [ContractController::class, 'index'])->name('kontrak');
Route::get('/tambah-kontrak', [ContractController::class, 'create'])->name('tambahKontrak');
Route::get('/edit-kontrak/{id}', [ContractController::class, 'edit'])->name('editKontrak');
Route::post('/update-kontrak/{id}', [ContractController::class, 'update'])->name('updateKontrak');
Route::post('/simpan-kontrak', [ContractController::class, 'store'])->name('simpanKontrak');
Route::get('/hapus-kontrak/{id}', [ContractController::class, 'destroy'])->name('hapusKontrak');

Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambah-pegawai', [EmployeeController::class, 'create'])->name('tambahPegawai');
Route::get('/edit-pegawai/{id}', [EmployeeController::class, 'edit'])->name('editPegawai');
Route::post('/update-pegawai/{id}', [EmployeeController::class, 'update'])->name('updatePegawai');
Route::post('/simpan-pegawai', [EmployeeController::class, 'store'])->name('simpanPegawai');
Route::get('/hapus-pegawai/{id}', [EmployeeController::class, 'destroy'])->name('hapusPegawai');
