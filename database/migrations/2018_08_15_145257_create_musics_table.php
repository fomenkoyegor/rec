<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('path');
            $table->text('cover');
            $table->text('cover_server_path');
            $table->text('music_server_path');
            $table->text('title');
            $table->text('album');
            $table->integer('genre_id')->references('id')->on('genres');
            $table->text('year');
            $table->text('artist');
            $table->text('durration');
            $table->integer('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('musics');
    }
}
