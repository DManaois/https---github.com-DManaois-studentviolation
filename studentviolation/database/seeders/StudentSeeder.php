<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Student Name',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

