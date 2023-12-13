<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController; 
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

Route::get('/', function () {
    return view('welcome');
});

// Controlador de rutes amb el prefix amb el meu nom y els parametres de cada ruta
Route::prefix('oriana')->group(function () {
    Route::get('signin/{str1}/{str2}/{str3}/{str4}', [SignController::class, 'signin'])->name('signin');
    Route::get('signup/{str1}/{str2}/{str3}', [SignController::class, 'signup'])->name('signup');
});

Route::prefix('oriana2')->group(function () {
    Route::get('/signin', [SignController::class, 'signin2'])->name('signin');
    Route::get('/signup', [SignController::class, 'signup2'])->name('signup');
});