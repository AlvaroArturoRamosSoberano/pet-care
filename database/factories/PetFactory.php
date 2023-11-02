<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Specie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $colors = ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Blanco', 'Negro', 'Naranja'];
    public function definition(): array
    {
        return [
            //
            'pet_name' => $this->faker->name(),
            'birthday' => $this->faker->date(),
            'specie_id' => Specie::factory(),
            'hair_color' => $this->faker->colorName(),
            'image_path' => $this->faker->imageUrl(),
            'client_id' => Client::factory(),
        ];
    }
}
