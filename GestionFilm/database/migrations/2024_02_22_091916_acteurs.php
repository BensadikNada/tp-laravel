<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('acteurs', function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('pays');
            $table->date('date_naissance');
            $table->integer('tel');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('acteurs');
    }
};
