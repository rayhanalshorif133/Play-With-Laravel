<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\GoogleMapController;
use App\Http\Controllers\MixedController;
use App\Http\Controllers\SendMailController;

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
    if(Auth::check()){
        return redirect()->route('home');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('affiliates', [AffiliateController::class, 'index'])->name('affiliates.index');
Route::middleware('auth')->get('google-map', [GoogleMapController::class, 'index'])->name('google-map');
Route::middleware('auth')->get('send-mail', [SendMailController::class, 'index'])->name('send-mail');
Route::middleware('auth')->post('send-mail', [SendMailController::class, 'sendMail'])->name('send-mail');
Route::middleware('auth')->get('aos-library', [MixedController::class, 'aosLibrary'])->name('aos-library');
