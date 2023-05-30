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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Produit')->unique();
            $table->string('Img_Produit')->nullable();
            $table->integer('Protein');
            $table->integer('Sodium');
            $table->integer('Magnesium');
            $table->integer('Potassium');
            $table->integer('Cobalt');
            $table->integer('Manganese');
            $table->integer('Zinc');
            $table->integer('Iodine');
            $table->integer('Vitamin_A');
            $table->integer('Vitamin_D');
            $table->integer('Vitamin_E');
            $table->string('date_exp');
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
