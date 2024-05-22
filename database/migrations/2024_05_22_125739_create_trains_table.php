<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('company', 100);
            $table->string('origin', 100);
            $table->string('destination', 100);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_number', 50);
            $table->tinyInteger('coaches_number')->unsigned();
            $table->tinyInteger('on_time', 100)->unsigned();
            $table->tinyInteger('cancelled', 100)->unsigned();
            $table->timestamps();
        });
    }

// Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
