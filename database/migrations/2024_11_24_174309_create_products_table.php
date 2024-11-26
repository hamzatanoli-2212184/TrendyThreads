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
            $table->id();  // Auto-increment primary key
            $table->string('name');  // Product name
            $table->decimal('price', 8, 2);  // Product price (e.g., 9999.99)
            $table->text('description')->nullable();  // Product description (nullable)
            $table->string('image')->nullable();  // Image column (nullable)
            $table->timestamps();  // Created_at and updated_at columns
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
