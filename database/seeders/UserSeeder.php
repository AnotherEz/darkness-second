<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Edinson',
            'second_name' => 'Eduardo',
            'first_lastname' => 'Fernandez',
            'second_lastname' => 'Flores',
            'email' => 'anotherez03@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más usuarios aquí
    }
}