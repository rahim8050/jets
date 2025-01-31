<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Double>
 */
class DoubleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word,
            'company' => $this->faker->word,
            'model' => $this->faker->word,
            'color' => $this->faker->word,
            'plate' => $this->faker->word,
            'year' => $this->faker->word,
            'engine' => $this->faker->word,
        ];
    }
}
