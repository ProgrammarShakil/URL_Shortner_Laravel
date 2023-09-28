<?php

use App\Http\Controllers\UrlShortendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/shorten-url', [UrlShortendController::class, 'shortURLFrom'])->name('shorten-url-form');
Route::post('/shorten-url', [UrlShortendController::class, 'shorten'])->name('shorten-url');
Route::get('/{shortUrl}', [UrlShortendController::class, 'redirect'])->name('short-url');
