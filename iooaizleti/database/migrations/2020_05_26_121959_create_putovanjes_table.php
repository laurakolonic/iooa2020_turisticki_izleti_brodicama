<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutovanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putovanjes', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->time('vrijeme');
            $table->foreignId('idBrod');
            $table->foreignId('idRuta');
            $table->foreignId('idZaposlenik');


            $table->timestamps();
            $table->foreign('idBrod')->references('id')->on('brods')->onDelete('cascade');
            $table->foreign('idRuta')->references('id')->on('rutas')->onDelete('cascade');
            $table->foreign('idZaposlenik')->references('id')->on('zaposleniks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('putovanjes');
    }
}
