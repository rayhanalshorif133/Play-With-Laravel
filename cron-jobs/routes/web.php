<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Http\Controllers\SendMailController;

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


Route::get('/migrate', function () {
    Artisan::call('migrate:fresh');
    return "Migrated";
});

Route::get('/', function () {
    $users = User::count();
    return view('welcome', compact('users'));
});

Route::get('/send-mail', [SendMailController::class, 'sendMail']);
