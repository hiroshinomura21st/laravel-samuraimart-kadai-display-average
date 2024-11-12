<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();
        dump($name);  // 確認用にダンプ

        return [
            'name' => $name,
            'description' => fake()->realText(),
            'price' => fake()->randomNumber(4, true),
            'category_id' => 1
        ];
    }
}
