<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('lang/{lang}', [LanguageController::class,'switchLang'])->name("lang.switch");
 
Route::get('/greeting/{locale}', function ($locale) {


    $be_currentLocale = App::currentLocale();
    App::setLocale($locale);
    $currentLocale = App::currentLocale(); 



    Session::flash('status', 'Task was successful!');
    return redirect()->back();
 
})->name('greeting');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
