<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet_vaccine>
 */
class Pet_vaccineFactory extends Factory
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
            'vaccine_id' => Vaccine::factory(), 
            'aplication' => $this->faker->date(), 
            'next_aplication' => $this->faker->date(),
        ];
    }
}
