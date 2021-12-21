<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransformateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transformateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_tfo');
            $table->string('puissance_tfo');
            $table->foreignId("poste_id")->constrained('postes');
            $table->foreignId('agent_id')->constrained("agents");
            $table->foreignId('sous_station_id')->constrained("sous_stations");
            $table->foreignId('cabine_id')->constrained("cabines");
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
        Schema::dropIfExists('transformateurs');
    }
}
