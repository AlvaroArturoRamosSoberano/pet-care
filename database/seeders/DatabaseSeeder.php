<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Breed;
use App\Models\Client;
use App\Models\Disease;
use App\Models\Medical_record;
use App\Models\Pet;
use App\Models\Pet_detail;
use App\Models\Pets_breeds;
use App\Models\Pets_vaccines;
use App\Models\Specie;
use App\Models\Vaccine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Breed::factory()->times(20)->create();
        Vaccine::factory()->times(20)->create();
        Disease::factory()->times(20)->create();
        Specie::factory()->times(20)->create();
        Client::factory()->times(20)->create();
        Pet::factory(20)->create()->each(function ($pet) {
            $client = Client::inRandomOrder()->first();
            $pet->update(['client_id' => $client->id]);
        });

        Medical_record::factory(20)->create()->each(function ($medicalRecord) {
            $pet = Pet::inRandomOrder()->first();
            $medicalRecord->pet()->associate($pet);
            $medicalRecord->save();
        });

        Pet_Detail::factory()->times(20)->create()->each(function ($petDetail) {
            $pet = Pet::inRandomOrder()->first();
            $petDetail->pet_id = $pet->id;
            $petDetail->save();
        });

        Pets_breeds::factory()->times(20)->create()->each(function ($petsBreed) {
            // Personaliza los registros si es necesario
            $pet = Pet::inRandomOrder()->first(); // Obtiene una mascota aleatoria
            $breed = Breed::inRandomOrder()->first(); // Obtiene una raza aleatoria

            $petsBreed->pet_id = $pet->id;
            $petsBreed->breed_id = $breed->id;
            $petsBreed->save();
        });
        
        Pets_vaccines::factory()->times(20)->create()->each(function ($petsVaccine) {
            $pet = Pet::inRandomOrder()->first();
            $vaccine = Vaccine::inRandomOrder()->first();

            $petsVaccine->pet_id = $pet->id;
            $petsVaccine->vaccine_id = $vaccine->id;
            $petsVaccine->save();
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
