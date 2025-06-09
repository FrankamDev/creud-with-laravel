<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      "title" => $this->faker->word(3, true), // Generates a random word with 3 characters
      "category" => $this->faker->randomElement([
        "Electronics",
        "Books",
        "Clothing",
        "Home & Kitchen",
        "Sports & Outdoors",
        "Toys & Games",
        "Health & Beauty",
      ]),
      "price" => $this->faker->numberBetween(1000, 400000),
      "created_at" => now(),
      "updated_at" => now(),

    ];
  }
}
