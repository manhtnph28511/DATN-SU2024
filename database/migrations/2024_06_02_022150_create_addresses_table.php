<?php

use App\Models\User;
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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();// Khóa ngoại tham chiếu đến id của bảng users
            $table->string('address_line'); // Địa chỉ dòng 1
            $table->string('city'); // Thành phố
            $table->string('state'); // Tỉnh/Thành phố
            $table->string('country'); // Quốc gia
            $table->string('postal_code'); // Mã bưu chính
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
