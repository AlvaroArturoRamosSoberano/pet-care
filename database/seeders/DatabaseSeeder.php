<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Breed;
use App\Models\Customer;
use App\Models\Disease;
use App\Models\Medical_record;
use App\Models\Pet;
use App\Models\Pet_detail;
use App\Models\Pet_breed;
use App\Models\Pet_vaccine;
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
        Customer::factory()->times(20)->create();
        Pet::factory(20)->create()->each(function ($pet) {
            $client = Customer::inRandomOrder()->first();
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

        Pet_breed::factory()->times(20)->create()->each(function ($petBreed) {
            // Personaliza los registros si es necesario
            $pet = Pet::inRandomOrder()->first(); // Obtiene una mascota aleatoria
            $breed = Breed::inRandomOrder()->first(); // Obtiene una raza aleatoria

            $petBreed->pet_id = $pet->id;
            $petBreed->breed_id = $breed->id;
            $petBreed->save();
        });

        Pet_vaccine::factory()->times(20)->create()->each(function ($petVaccine) {
            $pet = Pet::inRandomOrder()->first();
            $vaccine = Vaccine::inRandomOrder()->first();

            $petVaccine->pet_id = $pet->id;
            $petVaccine->vaccine_id = $vaccine->id;
            $petVaccine->save();
        });
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
