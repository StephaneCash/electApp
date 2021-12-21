<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_stations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_sous_station');
            $table->string('tension_sous_station');
            $table->string('nbre_tfo');
            $table->string('puissance_tfo');
            $table->string('photo_tfo');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreignId('poste_id')->constrained("postes");
            $table->foreignId('agent_id')->constrained("agents");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("postes", function (Blueprint $table) {
            $table->dropConstrainedForeignId('poste_id');
        });
        Schema::table("agents", function (Blueprint $table) {
            $table->dropConstrainedForeignId('agent_id');
        });
        Schema::dropIfExists('sous_stations');
    }
}
