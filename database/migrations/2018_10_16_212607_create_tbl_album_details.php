<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAlbumDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_album_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_album')->unsigned();
            $table->integer('id_song')->unsigned();
            $table->foreign('id_album')->references('id')->on('tbl_albums');
            $table->foreign('id_song')->references('id')->on('tbl_songs');
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
        Schema::table('tbl_album_details', function (Blueprint $table) {
            Schema::dropIfExists('tbl_album_details');
        });
    }
}
