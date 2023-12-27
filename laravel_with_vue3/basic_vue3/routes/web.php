<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('optimize');
    Artisan::call('route:cache');
    return "Cleared!";
});

Route::get('migrate-fresh', function () {
    Artisan::call('migrate:fresh --seed');
    return "migrate:fresh --seed!";
});

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');





// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/user', [UserController::class, 'index'])->name('user');
