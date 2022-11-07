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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnail');
            $table->text('embed_youtube1')->nullable();
            $table->text('embed_youtube2')->nullable();
            $table->text('embed_youtube3')->nullable();
            $table->text('embed_youtube4')->nullable();
            $table->text('embed_youtube5')->nullable();
            $table->text('foto1')->nullable();
            $table->text('foto2')->nullable();
            $table->text('foto3')->nullable();
            $table->text('foto4')->nullable();
            $table->text('foto5')->nullable();
            $table->text('foto6')->nullable();
            $table->text('foto7')->nullable();
            $table->text('foto8')->nullable();
            $table->text('foto9')->nullable();
            $table->text('foto10')->nullable();
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
        Schema::dropIfExists('galleries');
    }
};
