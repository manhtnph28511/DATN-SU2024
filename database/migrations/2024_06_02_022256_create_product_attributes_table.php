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
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained();// Tạo trường product_id kiểu số nguyên không dấu
            $table->string('attribute_name'); // Tạo trường attribute_name kiểu chuỗi để lưu tên thuộc tính
            $table->string('attribute_value'); // Tạo trường attribute_value kiểu chuỗi để lưu giá trị thuộc tính
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attributes');
    }
};
