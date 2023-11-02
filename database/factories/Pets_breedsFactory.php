<?php

namespace Database\Factories;

use App\Models\breed;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets_breeds>
 */
class Pets_breedsFactory extends Factory
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
            'breed_id' => breed::factory(),
        ];
    }
}
