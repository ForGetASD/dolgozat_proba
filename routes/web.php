<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('view');
});

Route::get('/osszesIngatlan', [IngatlanokController::class, 'ingatpluskateg']);
Route::get('/osszesKateg', [KategoriakController::class, 'index']);
Route::post('/ujIngatlan', [IngatlanokController::class, 'ujIngatlan']);
Route::delete('/delIngatlan/{id}', [IngatlanokController::class, 'torlesIngatlan']);