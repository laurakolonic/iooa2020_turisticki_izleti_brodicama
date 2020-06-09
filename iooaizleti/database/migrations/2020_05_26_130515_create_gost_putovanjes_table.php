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
            $table->timestamps();

            $table->foreign('idGost')->references('id')->on('gosts')->onDelete('cascade');
            $table->foreign('idPutovanje')->references('id')->on('putovanjes')->onDelete('cascade');
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
