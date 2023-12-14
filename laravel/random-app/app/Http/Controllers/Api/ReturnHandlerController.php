<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReturnHandlerController extends Controller
{
    public function returnName(){
        // return $this->respondWithSuccess("data", "Hello World");
        return view('page.returnName');
    }
}
