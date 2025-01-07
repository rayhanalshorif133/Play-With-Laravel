<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // add this line

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


// using home controller
Route::get('/', [HomeController::class, 'index']);

// remove cahce route create
Route::get('/set-cahce', [HomeController::class, 'setCache']);
Route::get('/remove-cahce', [HomeController::class, 'removeCache']);


