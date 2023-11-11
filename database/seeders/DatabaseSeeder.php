<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'beni ozora',
            'username' => 'beniozora',
            'email' => 'benedictusradyan@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'adminrt06',
            'username' => 'adminrt06',
            'email' => 'adminrt06@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
