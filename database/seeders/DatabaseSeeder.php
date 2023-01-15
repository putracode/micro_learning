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
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'no_telepon' => '-',
            'perusahaan' => 'ICON+',
            'bidang' => '-',
            'is_approve' => 2,
            'pengguna' => 'Internal',
            'password_change' => true
        ]);

        User::create([
            'name' => 'Guest',
            'role' => 'user',
            'email' => 'guest@guest.com',
            'no_telepon' => '-',
            'password' => bcrypt('password'),
            'perusahaan' => 'ICON+',
            'bidang' => '-',
            'is_approve' => 2,
            'pengguna' => 'Internal',
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
