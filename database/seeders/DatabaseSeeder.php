<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Saputra',
            'role' => 'admin',
            'username' => 'putra',
            'email' => 'saputra@gmail.com',
            'password' => bcrypt('password'),
            'approve' => 1
        ]);

        User::create([
            'name' => 'Rendi Purwito Armin',
            'role' => 'user',
            'username' => 'rendi',
            'email' => 'rendi@gmail.com',
            'password' => bcrypt('password'),
            'approve' => 1
        ]);

        // Post::factory(20)->create();
    }
}
