<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Affiliate;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
    public function index()
    {
        $user = auth()->user()->id;
        $user = User::find($user);
        $affiliateUser = Affiliate::where('user_id', $user->id)->with('user')->first();
        // hasRole('admin');
        if($user->hasRole('admin')){
            $users = User::select()->where('id' , '!=' , auth()->user()->id)->with('affiliate')->get();
            return view('affiliates.list', compact('users'));
        }else{
            return view('affiliates.index', compact('affiliateUser'));
        }
    }
}
