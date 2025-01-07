<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function getMacAddress()
    {
        // Use a shell command to retrieve the MAC address
        $macAddress = exec('getmac');
        $macAddress = strtok($macAddress, ' '); // Extract only the MAC address part
        return response()->json(['mac_address' => $macAddress]);
    }

    public function index()
    {

        $macAddress = $_SERVER['REMOTE_ADDR'];
        $macAddress = $this->getMacAddress();

        dd($macAddress);
        Log::info('Home Controller');





        Cache::remember('user_status_inactive', 1, function () {
            // Set user status to 'inactive' if not cached
            $users = User::all();
            foreach ($users as $user) {
                // Update each user's status to 'inactive'
                $user->status = 'inactive';
                $user->save();
            }
            // Return the users or any relevant data
            return $users;
        });



        $cache = Cache::get('user_status_active');
        Log::info('Cache status: ' . $cache);
        $users = User::all();
        return view('welcome', compact('users', 'cache'));
    }


    public function setCache()
    {
        Cache::put('user_status_active', 'active', 60);  // Cache status as 'inactive' for 20 seconds

        dd('Cache set');
    }

    public function removeCache()
    {
        Cache::forget('user_status_active');
        dd('Cache removed');
    }
}
