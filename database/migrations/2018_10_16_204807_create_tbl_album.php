<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAlbum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_albums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_account')->unsigned();
            $table->text('description');
            $table->string('album_name')->unique();
            $table->string('image_path');
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
        Schema::dropIfExists('tbl_albums');
    }
}
