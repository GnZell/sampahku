<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Yudha Rifqi Ananta',
            'email' => 'f2166ya308@dicoding.org',
            'password' => Hash::make(12345),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Septian Dwi Anggoro Mochtar',
            'email' => 'f2476ya287@dicoding.org',
            'password' => Hash::make(12345),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Richard Alexander',
            'email' => 'f247ya377@dicoding.org',
            'password' => Hash::make(12345),
            'role' => 'admin',
        ]);
    }
}
