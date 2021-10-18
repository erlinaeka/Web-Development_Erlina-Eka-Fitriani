<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/surat-izin-kerja', [App\Http\Controllers\IzinKerjaController::class, 'index'])->name('suratizinkerja');
Route::post('/surat-izin-kerja', [App\Http\Controllers\IzinKerjaController::class, 'store'])->name('tambahsuratizinkerja');
Route::get('fetch-surat-izin-kerja', [App\Http\Controllers\IzinKerjaController::class, 'fetchsuratizin']);
Route::get('edit-surat-izin-kerja/{id}',  [App\Http\Controllers\IzinKerjaController::class, 'edit']);
Route::put('update-surat-izin-kerja/{id}',  [App\Http\Controllers\IzinKerjaController::class, 'update']);
Route::delete('delete-surat-izin/{id}',  [App\Http\Controllers\IzinKerjaController::class, 'destroy']);
Route::get('print-surat-izin/{id}', [App\Http\Controllers\IzinKerjaController::class, 'print']);

Route::get('/surat-lamaran-kerja', [App\Http\Controllers\LamarKerjaController::class, 'index']);
Route::post('/surat-lamaran-kerja', [App\Http\Controllers\LamarKerjaController::class, 'store']);
Route::get('fetch-surat-lamaran-kerja', [App\Http\Controllers\LamarKerjaController::class, 'fetchsuratlamaran']);
Route::get('edit-surat-lamaran-kerja/{id}',  [App\Http\Controllers\LamarKerjaController::class, 'edit']);
Route::put('update-surat-lamaran-kerja/{id}',  [App\Http\Controllers\LamarKerjaController::class, 'update']);
Route::delete('delete-surat-lamaran/{id}',  [App\Http\Controllers\LamarKerjaController::class, 'destroy']);
Route::get('print-surat-lamaran/{id}', [App\Http\Controllers\LamarKerjaController::class, 'print']);
