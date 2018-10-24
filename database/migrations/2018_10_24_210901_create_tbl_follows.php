<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFollows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_follows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_account')->unsigned();
            $table->integer('id_follow_user')->unsigned()->nullable();
            $table->integer('id_follow_singer')->unsigned()->nullable();
            $table->integer('id_follow_artist')->unsigned()->nullable();
            $table->foreign('id_account')->references('id')->on('tbl_accounts');
            $table->foreign('id_follow_user')->references('id')->on('tbl_accounts');
            $table->foreign('id_follow_singer')->references('id')->on('tbl_singers');
            $table->foreign('id_follow_artist')->references('id')->on('tbl_artists');
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
        Schema::dropIfExists('tbl_follows');
    }
}
