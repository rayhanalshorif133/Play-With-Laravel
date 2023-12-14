<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MixedController extends Controller
{
    public function aosLibrary()
    {
        // $randomGradientColor = [
        //     'from-rose-400 to-red-500', 
        //     'from-teal-400 to-teal-500',
        //     'from-red-500  to-orange-500',
        //     'from-green-400 to-blue-500',
        //     'from-blue-400 to-indigo-500',
        //     'from-indigo-400 to-purple-500',
        //     'from-purple-400 to-pink-500',
        //     'from-pink-400 to-rose-500',
        //     'from-rose-400 to-red-500',
        //     'from-teal-400 to-teal-500',            
        // ];

        return view('pages.aos-library');
    }
}
