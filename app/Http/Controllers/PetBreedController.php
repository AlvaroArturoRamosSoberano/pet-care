<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetBreed\StoreRequest;
use App\Http\Requests\PetBreed\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Pet_breed;
use Illuminate\Http\Request;

class PetBreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $pet_breed = Pet_breed::paginate($request->get("per_page", 10));
        return ApiResponse::success('Peticion ejecutada con éxito', 200, $pet_breed);
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
        $pet_breed = Pet_breed::create($request->validated());
        return ApiResponse::success('Recurso creado con éxito', 201, $pet_breed);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet_breed $pet_breed)
    {
        //
        $pet_breed = Pet_breed::find($pet_breed);
        return ApiResponse::success('Recurso encontrado con éxito', 200, $pet_breed);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet_breed $pet_breed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pet_breed $pet_breed)
    {
        //
        $pet_breed->update($request->validated());
        return ApiResponse::success('Recurso actualizado con éxito', 200, $pet_breed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet_breed $pet_breed)
    {
        //
        $pet_breed->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
