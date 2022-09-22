<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 60);
            $table->string('stazione_arrivo', 60);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('codice_treno', 20);
            $table->smallInteger('numero_carrozze')->unsigned();
            $table->string('stato_treno', 20);
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
        Schema::dropIfExists('trains');
    }
}
