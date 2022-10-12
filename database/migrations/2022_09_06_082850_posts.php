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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            // $table->enum('bidang',['Bidang Aktivasi Publik ( Aklik )','Bidang Aktivasi Listrik ( Aklis )','Bidang NA3P','Bidang Pemeliharaan','Bidang Retail','Bidang SPAP','Bidang Sarju']);
            $table->string('bidang');
            // $table->string('slug')->unique();
            // $table->string('image')->nullable();
            $table->string('embed_youtube');
            $table->string('embed_form');
            // $table->text('excerpt');
            // $table->text('body');
            // $table->timestamp('published_at')->nullable();
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
        //
    }
};
