<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRltNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rlt_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_notification')->unsigned();
            $table->integer('id_account')->unsigned();
            $table->integer('seen')->defaut(0);
            $table->foreign('id_notification')->references('id')->on('tbl_notifications');
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
        Schema::table('rlt_notifications', function (Blueprint $table) {
            Schema::dropIfExists('rlt_notifications');
        });
    }
}
