<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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
    protected $model=Product::class;

    public function definition()
    {
        $categories = Categories::pluck('id'); // Pobierz dostępne ID kategorii

        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->sentence,
            'category_id' => $this->faker->randomElement($categories), // Wybierz losową kategori
            'created_at' => $this->faker->dateTimeThisYear,
            'updated_at' => now(),
        ];
    }
}