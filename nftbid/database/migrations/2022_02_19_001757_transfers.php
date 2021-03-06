<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transfers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transfers', function(Blueprint $table){
            $table->increments('id');
            $table->Integer('id_nft')->unsigned();
            $table->Integer('id_user')->unsigned();
            $table->foreign('id_nft')->references('id')->on('nfts');
            $table->foreign('id_user')->references('id')->on('users');
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
        //
        Schema::dropIfExists('transfers');
    }
}
