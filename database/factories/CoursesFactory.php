<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
    'name' => $this->faker->sentence(3),
    'description' => $this->faker->paragraph(3),
    'image' => $this->faker->imageUrl(640, 480, 'education', true),
    'price' => $this->faker->randomFloat(2, 20, 500),
    'discount' => $this->faker->numberBetween(0, 100),
    'total_students' => $this->faker->numberBetween(0, 1000),
    'total_hours' => $this->faker->numberBetween(1, 50),
    'rating' => $this->faker->randomFloat(1, 1, 5),
    // 'category_id' => Category::inRandomOrder()->first()->id,
    // 'level_id' => Level::inRandomOrder()->first()->id,
    // 'language_id' => Language::inRandomOrder()->first()->id,
    'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
    'is_featured' => $this->faker->boolean(20),
    'is_bestseller' => $this->faker->boolean(15),
    'is_new' => $this->faker->boolean(30),
    'is_free' => $this->faker->boolean(10),
        
        ];
    }
}
