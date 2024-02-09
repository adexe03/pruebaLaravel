<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Adexe', 'email' => 'adexe@gmail.com', 'password' => '123'],
            ['name' => 'Pepe', 'email' => 'pepe@pepe.es', 'password' => '123'],
            ['name' => 'Marta', 'email' => 'marta@marta.es', 'password' => '123'],
        ];

        User::insert($users);
    }
}
