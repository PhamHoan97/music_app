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
            $table->increments('id_show');
            $table->integer('id_account')->unsigned();
            $table->integer('id_song')->unsigned();
            $table->foreign('id_song')->references('id')->on('tbl_songs');
            $table->foreign('id_account')->references('id')->on('tbl_accounts');
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
