<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Affiliate;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Role
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        $admin_user = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin_user->assignRole($admin);

        $user_user = User::create([
            'name' => 'User 1',
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user_user->assignRole($user);


        // Affiliate
        Affiliate::create([
            'user_id' => $user_user->id,
            'ref_link' => 'http://127.0.0.1:8000/register?ref=' . $user_user->username,
            'ref_count' => 0,
            'ref_bonus' => 0,
            'ref_commission' => 500,
            'available_amount' => 0,
        ]);
    }
}
