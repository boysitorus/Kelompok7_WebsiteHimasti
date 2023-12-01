<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Admin Himasti',
            'email' => 'admin@del.ac.id',
            'email_verified_at' => now(),
            'role' => 'Admin',
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
