<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@grtech.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@grtech.com',
            'password' => Hash::make('password'),
        ]);
    }
}
