<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Disease;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medical_record>
 */
class Medical_recordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'pet_id' => Pet::factory(),
            'disease_id' => Disease::factory(),
            'symptom_presented' => $this->faker->sentence(2),
            'allergie' => $this->faker->sentence(1),
            'preescription' => $this->faker->sentence(2),
            'note' => $this->faker->sentence(3),
            'status' => $this->faker->numberBetween(1, 3),
            'duration' => $this->faker->numberBetween(1, 365),
        ];
    }
}
