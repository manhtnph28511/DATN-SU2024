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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Tạo trường order_id kiểu số nguyên không dấu
            $table->unsignedBigInteger('product_id'); // Tạo trường product_id kiểu số nguyên không dấu
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Tạo khóa ngoại order_id tham chiếu đến id trong bảng orders và thiết lập tính chất cascade để tự động xóa khi bản ghi liên quan bị xóa
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Tạo khóa ngoại product_id tham chiếu đến id trong bảng products và thiết lập tính chất cascade để tự động xóa khi bản ghi liên quan bị xóa
            $table->integer('quantity'); // Tạo trường quantity kiểu số nguyên để lưu số lượng sản phẩm trong đơn hàng
            $table->decimal('price', 8, 2); // Tạo trường price kiểu số thập phân với 8 số tổng cộng và 2 số sau dấu phẩy để lưu giá sản phẩm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
