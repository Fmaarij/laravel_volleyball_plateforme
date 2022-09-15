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
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nomdeclub');
            $table->string('ville');
            $table->string('pays');
            $table->string('maxdejoueurparrole');
            // $table->string('continent_id');
            $table->foreignId('continent_id')->constrained()->onDelete('cascade');
            // nom de club, une ville qu'elle représente , un pays et un maximum de joueur possible dans leur équipe et par role (2 avant, 2 centraux, 2 arrière, 3remplacants)*, continent_id (pour déterminer dans quel contient l'équipe joue)
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
        Schema::dropIfExists('equipes');
    }
};
