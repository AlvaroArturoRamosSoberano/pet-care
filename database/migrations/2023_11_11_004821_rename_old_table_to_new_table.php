<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('pets_vaccines', 'pet_vaccines');
        Schema::rename('pet_breed', 'pet_breeds');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('pet_vaccine', 'pet_vaccines');
        Schema::rename('pet_breed', 'pet_breeds');
    }
};
