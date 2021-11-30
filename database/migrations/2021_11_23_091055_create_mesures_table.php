<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("capteur_id");
            $table->float('noise_level');
            $table->dateTime('date_mesure');
            $table->timestamps();
            $table->index('capteur_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesures');
    }
}
