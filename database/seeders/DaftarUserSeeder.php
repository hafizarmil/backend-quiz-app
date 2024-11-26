<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DaftarUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Pengajar',
                'email' => 'pengajar@example.com',
                'password' => Hash::make('password'),
                'role' => 'pengajar',
            ],
            [
                'name' => 'Pelajar',
                'email' => 'pelajar@example.com',
                'password' => Hash::make('password'),
                'role' => 'pelajar',
            ]
        ]);
    }
}
