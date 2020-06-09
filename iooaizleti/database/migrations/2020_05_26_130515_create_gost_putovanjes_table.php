<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGostPutovanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gost_putovanjes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idGost');
            $table->foreignId('idPutovanje');
            $table->integer('cijenaGosta');
            $table->timestamps();

            $table->foreign('idGost')->references('id')->on('users');
            $table->foreign('idPutovanje')->references('id')->on('putovanjes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gost_putovanjes');
    }
}
