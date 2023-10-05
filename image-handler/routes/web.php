<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/upload', function () {
    return view('welcome');
})->name('upload.index');




Route::post('/upload', function (Request $request) {

    // <span class="text-danger mx-1">(less than 1 MB)</span>

    /* 
     $image = $request->file('image');
     // get size
     $imageSize = $image->getSize();
     // bytes to MB
     $imageSize = $imageSize / 1024 / 1024;
     if($imageSize > 1){
         app('flasher')->addError('Image size should be less than 1 MB');
         return redirect()->back();
     }
                
    */ 

    $image = $request->file('image');
    // get sizze
    $imageSize = $image->getSize();
    // bytes to MB
    $imageSize = $imageSize / 1024 / 1024;
    
   
    dd($imageSize);
})->name('upload');


