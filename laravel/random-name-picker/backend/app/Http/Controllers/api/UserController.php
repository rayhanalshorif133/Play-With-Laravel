<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function randomUser()
    {
        $user = \App\Models\User::inRandomOrder()->first();
        return response()->json($user);
    }
}
