<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor', [LaporBanjirController::class, 'create'])->name('lapor_banjir.create');
Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');
Route::get('/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('lapor_banjir.konfirmasi');
Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('lapor_banjir.index');

Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('lapor_banjir.index');
Route::get('/laporan/create', [LaporBanjirController::class, 'create'])->name('lapor_banjir.create');
Route::post('/laporan', [LaporBanjirController::class, 'store'])->name('laporan.store');
