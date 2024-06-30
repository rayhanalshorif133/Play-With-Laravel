<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigateController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/role-permissions', [NavigateController::class, 'rolePermissions'])->name('role-permissions');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
