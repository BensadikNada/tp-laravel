<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('touriste', function (Blueprint $table) {
            $table->id('idtouriste');
            $table->string('nom');
            $table->string('prenom');
            $table->foreignId('idpays')->constrained('pays');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('touriste');
    }
};
