<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => Article::factory(),
            'date' => $this->faker->date(),
            'title' => $this->faker->word(3),
            'image' => 'img/' . $this->faker->numberBetween(1,10) . '.jpg',
            'content' => $this->faker->paragraph(15),
        ];
    }
}
