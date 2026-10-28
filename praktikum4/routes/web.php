<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);
