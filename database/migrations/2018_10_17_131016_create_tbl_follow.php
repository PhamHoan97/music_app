<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFollow extends Migration
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
            $table->integer('id_follow')->unsigned();
            $table->foreign('id_account')->references('id')->on('tbl_accounts');
            $table->foreign('id_follow')->references('id')->on('tbl_accounts');
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
