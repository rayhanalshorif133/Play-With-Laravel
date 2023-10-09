<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {

        $locale = $request->input('locale');
        if (in_array($locale, ['en', 'es'])) {
            Session::put('lang', $locale);
        }
        return redirect()->back();
    }
}
