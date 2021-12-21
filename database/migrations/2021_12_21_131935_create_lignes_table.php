<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('cabine_id')->constrained("cabines");
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
        Schema::table("cabines", function (Blueprint $table) {
            $table->dropConstrainedForeignId('cabine_id');
        });
        Schema::table("agents", function (Blueprint $table) {
            $table->dropConstrainedForeignId('agent_id');
        });
        Schema::dropIfExists('lignes');
    }
}
