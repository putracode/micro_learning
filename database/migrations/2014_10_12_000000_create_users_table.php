<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['user','admin']);
            // $table->enum('pengguna',['Internal','Eksternal']);
            $table->string('perusahaan');
            $table->string('pengguna');
            // $table->enum('bidang',['Bidang Aktivasi Publik','Bidang Aktivasi Listrik','Bidang NA3P','Bidang Pemeliharaan','Bidang Retail','Bidang SPAP','Bidang Sarju']);
            $table->string('bidang');
            $table->enum('is_approve',['Not Approved','Approved']);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
