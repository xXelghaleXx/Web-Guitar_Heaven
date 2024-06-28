<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'admin',
            'email' => 'admin@local.com', // Cambia esto por el email deseado
            'password' => Hash::make('123'), // Cambia 'password' por la contraseña deseada
            'rol' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
