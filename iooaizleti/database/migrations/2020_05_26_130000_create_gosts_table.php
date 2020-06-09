<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gosts', function (Blueprint $table) {
            $table->id();
            $table->integer('oibGost');
            $table->string('imeGost');
            $table->string('prezimeGost');
            $table->date('datumRodenja');
            $table->foreignId('idKategorijaGost');
            $table->timestamps();

            $table->foreign('idKategorijaGost')->references('id')->on('kategorija_gosts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gosts');
    }
}
