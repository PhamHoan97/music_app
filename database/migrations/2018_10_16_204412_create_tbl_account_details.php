<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAccountDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_account_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_account')->unsigned();
            $table->string('name')->nullable();
            $table->string('avatar_path')->nullable();
            $table->integer('number_my_follow')->nullable();
            $table->string('number_my_song')->nullable();
            $table->string('cover_path')->nullable();
            $table->date('birth')->nullable();
            $table->string('phonenumber')->nullable();
            $table->text('more_infor')->nullable();
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
        Schema::dropIfExists('tbl_account_details');
    }
}
