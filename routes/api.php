<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetDetailController;
use App\Http\Controllers\PetBreedController;
use App\Http\Controllers\PetVaccineController;
use App\Http\Controllers\SpecieController;
use App\Http\Controllers\VaccineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('breeds', BreedController::class);
Route::apiResource('customers',CustomerController::class);
Route::apiResource('diseases', DiseaseController::class);
Route::apiResource('medical-records', MedicalRecordController::class);
Route::apiResource('pets', PetController::class);
Route::apiResource('pet-details', PetDetailController::class);
Route::apiResource('pet-breeds', PetBreedController::class);
Route::apiResource('pet-vaccines', PetVaccineController::class);
Route::apiResource('species', SpecieController::class);
Route::apiResource('vaccines', VaccineController::class);