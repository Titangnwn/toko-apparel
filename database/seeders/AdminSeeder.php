<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Menambahkan akun admin pertama
        User::updateOrInsert(
            ['email' => 'admin1@example.com'], // Kondisi jika email sudah ada
            [
                'name' => 'Admin 1',
                'email' => 'admin1@example.com',
                'password' => bcrypt('password1'),
                'role' => 'admin', // Mengatur role sebagai admin
            ]
        );

        // Menambahkan akun admin kedua dengan email yang bisa kamu tentukan sendiri
        User::updateOrInsert(
            ['email' => 'titan.farizal@gmail.com'], // Email admin yang sudah kamu tentukan
            [
                'name' => 'Admin 2',
                'email' => 'titan.farizal@gmail.com', // Email admin kedua
                'password' => bcrypt('280304zal'),
                'role' => 'admin', // Mengatur role sebagai admin
            ]
        );
    }
}
