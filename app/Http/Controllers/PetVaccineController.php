<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetVaccine\StoreRequest;
use App\Http\Requests\PetVaccine\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Pet_vaccine;
use Illuminate\Http\Request;

class PetVaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $pet_vaccines = Pet_vaccine::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada con éxito', 200, $pet_vaccines);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $pet_vaccine = Pet_vaccine::create($request->validated());
        return ApiResponse::success('Recurso creado con éxito', 201, $pet_vaccine);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet_vaccine $pet_vaccine)
    {
        //
        $pet_vaccine = Pet_vaccine::find($pet_vaccine);
        return  ApiResponse::success('Recurso encontrado con éxito', 200, $pet_vaccine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet_vaccine $pet_vaccine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pet_vaccine $pet_vaccine)
    {
        //
        $pet_vaccine->update($request->validated());
        return ApiResponse::success('Recurso actualizado con ëxito', 200, $pet_vaccine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet_vaccine $pet_vaccine)
    {
        //
        $pet_vaccine->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
