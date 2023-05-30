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
        Schema::disableForeignKeyConstraints();
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('ID_Commande');
            $table->foreignId('client_id')->constrained('clients')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('produit_id')->constrained('produits')->onUpdate('restrict')->onDelete('restrict');
            $table->integer('Qt_Produit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
