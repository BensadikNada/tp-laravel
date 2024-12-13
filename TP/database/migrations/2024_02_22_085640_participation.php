<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('participations', function(Blueprint $table){
            $table->id();
            $table->bigInteger("film_id")->unsigned();
            $table->bigInteger("acteur_id")->unsigned();
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('acteur_id')->references('id')->on('acteurs');
            $table->string('role');
            $table->unique(['film_id','acteur_id']);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('participation');
    }
};
