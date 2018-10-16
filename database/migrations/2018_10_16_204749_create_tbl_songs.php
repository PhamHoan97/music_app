<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSongs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('song_name');
            $table->string('song_image_path');
            $table->integer('view')->default(0);
            $table->integer('like')->default(0);
            $table->datetime('post_time');
            $table->text('description')->nullable();
            $table->text('lyrics')->nullable();
            $table->text('style');
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
        Schema::dropIfExists('tbl_songs');
    }
}
