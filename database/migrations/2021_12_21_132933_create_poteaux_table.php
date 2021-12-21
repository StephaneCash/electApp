<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoteauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poteaux', function (Blueprint $table) {
            $table->id();
            $table->string('nom_poteau');
            $table->string('type_armement');
            $table->string('distance_poteau');
            $table->string('nature_poteau');
            $table->string('type_poteau');
            $table->string('angle_poteau');
            $table->string('orientation_angle');
            $table->string('photo_poteau');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreignId('ligne_id')->constrained("lignes");
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
        Schema::dropIfExists('poteaux');
    }
}
