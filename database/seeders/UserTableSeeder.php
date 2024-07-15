<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'              => 'user',
                'email'             => 'user@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'          => Hash::make('password'),
                'role'              => 'user',
            ],
            [
                'name'              => 'user2',
                'email'             => 'user2@gmail.com',
                'email_verified_at' => carbon::now(),
                'password'          => Hash::make('password'),
                'role'              => 'user',
            ],
            [
                'name'              => 'admin',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => carbon::now(),
                'password'          => Hash::make('password'),
                'role'              => 'admin',
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
