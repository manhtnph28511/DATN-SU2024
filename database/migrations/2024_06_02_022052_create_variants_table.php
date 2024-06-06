<?php

use App\Models\Product;
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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained();

            $table->string('Size', 50)->nullable();
            $table->string('Color', 50)->nullable();
            $table->decimal('Price', 10, 2)->notNullable();
            $table->string('description')->nullable();
            $table->integer('StockQuantity')->notNullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
