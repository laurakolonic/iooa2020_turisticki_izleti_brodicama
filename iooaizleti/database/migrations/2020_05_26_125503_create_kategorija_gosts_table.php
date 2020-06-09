<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorijaGostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategorija_gosts', function (Blueprint $table) {
            $table->id();
            $table->string('nazivKategorija');
            $table->date('godinaRodenja');
            $table->date('tekucaGodina');
            $table->integer('cijena');
            
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
        Schema::dropIfExists('kategorija_gosts');
    }
}
