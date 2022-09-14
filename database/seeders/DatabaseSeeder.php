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
            'is_approve' => 2
        ]);

        User::create([
            'name' => 'Rendi Purwito Armin',
            'role' => 'user',
            'username' => 'rendi',
            'email' => 'rendi@gmail.com',
            'password' => bcrypt('password'),
            'is_approve' => 2
        ]);

        // Post::factory(20)->create();
        // if($request->is_approve == 2){
        //     if(Auth::attempt($credentials)){
        //         $request->session()->regenerate();
        //         return redirect()->intended('/home');
        //     }
        // }else if($request->is_approve == 1){
        //     return back()->with('NotApprove','Login Gagal. Anda Belum Mendapat Persetujuan Admin');
        // }else{
        //     return back()->with('loginError','Login Failed!');
        // }
    }
}
