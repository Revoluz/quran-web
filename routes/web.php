<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\AsmaulHusnaController;

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
    return view('home');
});
Route::get('/navbar', function () {
    return view('layout/navbar');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/al-quran',[QuranController::class, 'index']);
Route::get('/al-quran/{id}',[QuranController::class, 'indexId']);

Route::get('/asmaul-husna',[AsmaulHusnaController::class, 'index']);

