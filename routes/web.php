<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\UrlShortendController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

// Frontend Routes
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/shorten-url', [UrlShortendController::class, 'shortURLFrom'])->name('shorten-url-form');
Route::post('/shorten-url', [UrlShortendController::class, 'shorten'])->name('shorten-url');
Route::get('/{shortUrl}', [UrlShortendController::class, 'redirect'])->name('short-url');



// User Routes
Route::prefix('user')->name('user.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
});
