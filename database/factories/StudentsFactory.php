<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'pincode' => $this->faker->postcode,
            'course' => $this->faker->word,
            'department' => $this->faker->word,
            'semester' => $this->faker->word,
            'roll_no' => $this->faker->word,
            'registration_no' => $this->faker->word,
            'admission_date' => $this->faker->date,
            'dob' => $this->faker->date,
        ];
    }
}
