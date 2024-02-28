<?php

use App\Models\Konversi;
use Iluminate\support\facades\route;
use App\Http\Controllers\KonversiNilaiController;

Route::get('/nilai', [KonversiNilaiController::class, 'index']);
Route::post('/nilai', [KonversiNilaiController::class, 'hitung']);
