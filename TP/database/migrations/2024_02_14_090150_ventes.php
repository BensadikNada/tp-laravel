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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id('idvente');
            $table->bigInteger("idclient")->unsigned();
            $table->bigInteger("idproduit")->unsigned();
            $table->foreign('idclient')->references('idclient')->on('clients'); 
            $table->foreign('idproduit')->references('idproduit')->on('produits');
            $table->integer('quantite');
            $table->date('datevente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
