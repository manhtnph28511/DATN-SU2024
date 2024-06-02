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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tạo trường name kiểu chuỗi
            $table->string('email')->unique(); // Tạo trường email kiểu chuỗi, và duy nhất
            $table->string('password'); // Tạo trường password kiểu chuỗi
            $table->string('type')->default('customer');//phân quyền admin customer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
