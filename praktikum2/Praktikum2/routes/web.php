<?php

use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor-banjir', [LaporBanjirController::class, 'index'])->name('lapor.index');
Route::post('/lapor-banjir/proses', [LaporBanjirController::class, 'store'])->name('lapor.store');
