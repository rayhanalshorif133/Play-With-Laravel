<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigateController extends Controller
{
    public function rolePermissions(){
        return view('role-permissions.index');
    }
}
