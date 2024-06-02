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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Tạo trường product_id kiểu số nguyên không dấu
            $table->unsignedBigInteger('category_id'); // Tạo trường category_id kiểu số nguyên không dấu
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Tạo khóa ngoại product_id tham chiếu đến id trong bảng products và thiết lập tính chất cascade để tự động xóa khi bản ghi liên quan bị xóa
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Tạo khóa ngoại category_id tham chiếu đến id trong bảng categories và thiết lập tính chất cascade để tự động xóa khi bản ghi liên quan bị xóa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
