<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaposleniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaposleniks', function (Blueprint $table) {
            $table->id();
            $table->integer('oibZaposlenik');
            $table->string('imeZaposlenik');
            $table->string('PrezimeZaposlenik');
            $table->date('datumRodenja');
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
        Schema::dropIfExists('zaposleniks');
    }
}
