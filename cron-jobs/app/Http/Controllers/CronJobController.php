<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class CronJobController extends Controller
{


    public function deleteUser()
    {
        $user = User::inRandomOrder()->first();
        $user->delete();
        Log::info('User deleted successfully');
        return 0;
    }
}
