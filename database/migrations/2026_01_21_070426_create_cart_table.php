<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();

            // Optional: user-based cart
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('product_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->integer('qty')->default(1);

            $table->decimal('original_price', 10, 2)->nullable();
            $table->integer('discount_percent')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};

