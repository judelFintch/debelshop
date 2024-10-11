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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);
            $table->boolean('is_new')->default(false);
            $table->boolean('inStock')->default(true);
            $table->integer('category_id');
            $table->string('image')->nullable(); // Ajoute la colonne image
            $table->timestamps();
            
            // Ajout de clés étrangères
           // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
