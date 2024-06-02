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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id'); // Tạo trường cart_id kiểu số nguyên không dấu
            $table->unsignedBigInteger('product_id'); // Tạo trường product_id kiểu số nguyên không dấu
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade'); // Tạo khóa ngoại cart_id tham chiếu đến id trong bảng carts và thiết lập tính chất cascade để tự động xóa khi bản ghi liên quan bị xóa
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Tạo khóa ngoại product_id tham chiếu đến id trong bảng products và thiết lập tính chất cascade để tự động xóa khi bản ghi liên quan bị xóa
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
