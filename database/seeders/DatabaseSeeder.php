<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => fake()->name,
                'email' => fake()->unique()->safeEmail,
                'password' => bcrypt('password'),
                'type' => random_int(0, 1) === 0 ? 'admin' : 'customer',
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Category
        for ($i = 0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'name' => fake()->word,
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Product
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'category_id'=>rand(1,10),
                'name' => fake()->word,
                'description' => fake()->sentence,
                'size'=>fake()->randomNumber(),
                'color'=>fake()->hexColor(),
                'price' => fake()->randomFloat(2, 0, 100),
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Blog
        for ($i = 0; $i < 10; $i++) {
            DB::table('blogs')->insert([
                'title' => fake()->sentence,
                'content' => fake()->paragraph,
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Cart
        for ($i = 0; $i < 10; $i++) {
            DB::table('carts')->insert([
                'user_id' => fake()->numberBetween(1, 10),
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Order
        for ($i = 0; $i < 10; $i++) {
            DB::table('orders')->insert([
                'user_id' => fake()->numberBetween(1, 10),
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Discount
        for ($i = 0; $i < 5; $i++) {
            DB::table('discounts')->insert([
                'code' => fake()->word,
                'amount' => fake()->randomFloat(2, 0, 50),
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Wishlist
        for ($i = 0; $i < 10; $i++) {
            DB::table('wishlists')->insert([
                'user_id' => fake()->numberBetween(1, 10),
                'product_id' => fake()->numberBetween(1, 20),
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Address
        for ($i = 0; $i < 10; $i++) {
            DB::table('addresses')->insert([
                'user_id' => fake()->numberBetween(1, 10),
                'address_line' => fake()->address,
                'city' => fake()->city,
                'state' => fake()->state,
                'country' => fake()->country,
                'postal_code' => fake()->postcode,
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Payment
        for ($i = 0; $i < 10; $i++) {
            DB::table('payments')->insert([
                'order_id' => fake()->numberBetween(1, 10),
                'amount' => fake()->randomFloat(2, 0, 100),
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Shipping
        for ($i = 0; $i < 10; $i++) {
            DB::table('shippings')->insert([
                'order_id' => fake()->numberBetween(1, 10),
                'address' => fake()->address,
            ]);
        }

        // Tạo dữ liệu mẫu cho bảng Review
        for ($i = 0; $i < 20; $i++) {
            DB::table('reviews')->insert([
                'user_id' => fake()->numberBetween(1, 10),
                'product_id' => fake()->numberBetween(1, 20),
                'content' => fake()->paragraph,
                'rating' => fake()->numberBetween(1, 5),
            ]);
        }
    
    }
}
