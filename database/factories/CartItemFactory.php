<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CartItem;
use App\Models\User;


class CartItemFactory extends Factory
{
    protected $model = CartItem::class;
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'quantity' => fake()->numberBetween(1, 10), 
        ];
    }
}
