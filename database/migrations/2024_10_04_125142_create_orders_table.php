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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email'); 
            $table->string('address'); 
            $table->integer('quantity');
            // Informations du produit
            $table->string('product_title');
            $table->decimal('product_price', 8, 2); 
            $table->text('product_description'); //
            $table->string('status')->default('pending'); // Statut de la commande (pending, completed, canceled)
            $table->string('reference')->unique(); // Référence unique pour la commande
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
