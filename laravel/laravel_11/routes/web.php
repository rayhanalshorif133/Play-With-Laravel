<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CounterController;

Route::get('/user', [CounterController::class, 'index']);
