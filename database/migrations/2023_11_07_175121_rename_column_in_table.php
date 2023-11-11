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
        Schema::table('table', function (Blueprint $table) {
            //
            Schema::table('pets', function ($table) {
                $table->renameColumn('client_id', 'customer_id');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table', function (Blueprint $table) {
            //
            Schema::table('pets', function ($table) {
                $table->renameColumn('client_id', 'customer_id');
            });
        });
    }
};
