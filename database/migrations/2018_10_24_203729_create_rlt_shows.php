<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRltShows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rlt_shows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_account')->unsigned()->nullable();
            $table->integer('id_singer')->unsigned()->nullable();
            $table->integer('id_artist')->unsigned()->nullable();
            $table->integer('id_song')->unsigned();
            $table->foreign('id_song')->references('id')->on('tbl_songs');
            $table->foreign('id_account')->references('id')->on('tbl_accounts');
            $table->foreign('id_singer')->references('id')->on('tbl_singers');
            $table->foreign('id_artist')->references('id')->on('tbl_artists');
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
        Schema::table('rlt_shows', function (Blueprint $table) {
            Schema::dropIfExists('rlt_shows');
        });
    }
}
