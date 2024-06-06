<?php

use App\Models\Order;
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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); 
            $table->foreignIdFor(Order::class)->constrained(); // Tạo khóa ngoại order_id tham chiếu đến id trong bảng orders 
            $table->foreignIdFor(Product::class)->constrained();// Tạo khóa ngoại product_id tham chiếu đến id trong bảng products 
            $table->integer('quantity'); // Tạo trường quantity kiểu số nguyên để lưu số lượng sản phẩm trong đơn hàng
            $table->decimal('price', 8, 2);
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
