<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'totalPages'=>fake()->numberBetween(100,500),
            'rating'=>fake()->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5),
            'isbn'=>fake()->isbn13,
            'publishDate'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            ];
    }
}
