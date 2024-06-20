<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'john.doe@example.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('password123'), // Hashed password
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => 'jane.smith@example.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => Hash::make('password123'), // Hashed password
            ],
            [
                'name' => 'Alice Johnson',
                'username' => 'alicejohnson',
                'email' => 'alice.johnson@example.com',
                'role' => 'user',
                'status' => 'active',
                'password' => Hash::make('password123'), // Hashed password
            ], 
        ]);
    }
}
