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
            // Azienda
            $table->string('agency', 50);
            // Stazione di partenza
            $table->string('departure_station', 80);
            // Stazione di arrivo
            $table->string('arrival_station', 80);
            // Orario di partenza
            $table->dateTime('departure_time');
            // Orario di arrivo
            $table->dateTime('arrival_time');
            // Codice Treno
            $table->string('train_code', 4);
            // Numero Carrozze
            $table->string('carriages', 2);
            // In orario
            $table->tinyInteger('in_time')->nullable();
            // Cancellato
            $table->tinyInteger('deleted')->nullable();
            // created_at & updated_at
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
