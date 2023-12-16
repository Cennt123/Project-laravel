<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'album_id' => fake()->randomElement(Album::pluck('id')),
            'duration' => fake()->numberBetween(180, 600),
            'composer' => fake()->name,
            'track_number' => fake()->numberBetween(1, 15),
        ];
    }
}
