<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/formulacuadratica/{a}/{b}/{c}', [ActividadController::class, 'FormulaCuadratica']);
Route::get('/numprimo/{num}', [ActividadController::class, 'NumPrimo']);
Route::get('/numamigos/{num1}/{num2}', [ActividadController::class, 'NumAmigos']);




