<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'specialty' => Category::all()->random()->category,
           'image' => 'img/' . $this->faker->numberBetween(1, 10) . '.jpg',
           'name' => $this->faker->name(),
        ];
    }
}
