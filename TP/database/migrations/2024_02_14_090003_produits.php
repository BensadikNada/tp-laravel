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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('idproduit');
            $table->bigInteger('idcategorie')->unsigned();
            $table->foreign('idcategorie')->references('idcategorie')->on('categories');
            $table->string('nom');
            $table->decimal('prix', 8, 2);
            $table->integer('quantiteStock');
            $table->string('marque')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
