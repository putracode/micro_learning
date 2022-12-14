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
        // \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Saputra',
            'role' => 'admin',
            // 'username' => 'putra',
            'email' => 'saputra@gmail.com',
            'password' => bcrypt('password'),
            'no_telepon' => '085692988947',
            'perusahaan' => 'ICON+',
            'bidang' => 'Bidang Aktivasi Publik',
            'is_approve' => 2,
            'pengguna' => 'Internal',
            'password_change' => true
        ]);

        User::create([
            'name' => 'Rendi Purwito Armin',
            'role' => 'user',
            // 'username' => 'rendi',
            'email' => 'rendi@gmail.com',
            'no_telepon' => '085893342578',
            'password' => bcrypt('password'),
            'perusahaan' => 'ICON+',
            'bidang' => 'Bidang Aktivasi Listrik',
            'is_approve' => 2,
            'pengguna' => 'Internal',
            'password_change' => true
        ]);

        User::create([
            'name' => 'Farhan Rian',
            'role' => 'user',
            // 'username' => 'rendi',
            'email' => 'farhan@gmail.com',
            'no_telepon' => '088932435572',
            'password' => bcrypt('password'),
            'perusahaan' => 'ICON+',
            'bidang' => 'Bidang Retail',
            'is_approve' => 2,
            'pengguna' => 'Eksternal',
            'password_change' => true
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
