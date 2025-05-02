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
            'nama' => 'tria TKK',
            'email' => 'tria@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Yaya TKK',
            'email' => 'yaya@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Aya TKK',
            'email' => 'aya@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
    }
}
