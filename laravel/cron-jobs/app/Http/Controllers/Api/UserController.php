<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function randomUser()
    {
        $user = User::inRandomOrder()->first();
        $data = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'count' => User::count()
        ];
        return $this->respondWithSuccess('Successfully fetched random user', $data);
    }

    // delete a user
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json("User deleted successfully");
    }
}
