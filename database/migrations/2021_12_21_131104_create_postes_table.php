<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostesTable extends Migration
{
    public function up()
    {
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->string('matricule_agent');
            $table->string('nom_poste');
            $table->string('tension_poste');
            $table->string('nbre_tfo');
            $table->string('puissance_tfo');
            $table->foreignId('agent_id')->constrained("agents");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
        Schema::table("agents", function(Blueprint $table){
            $table->dropConstrainedForeignId('agent_id');
        });
        Schema::dropIfExists('postes');
    }
}
