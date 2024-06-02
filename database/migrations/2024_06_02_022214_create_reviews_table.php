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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Khóa ngoại tham chiếu đến id của bảng users
            $table->unsignedBigInteger('product_id'); // Khóa ngoại tham chiếu đến id của bảng products
            $table->text('content'); // Nội dung đánh giá
            $table->integer('rating'); // Điểm đánh giá
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
