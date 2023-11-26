<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pets\StoreRequest;
use App\Http\Requests\Pets\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $pets = Pet::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada con éxito', 200, Pet::paginate($request->get('per_page', 10)));
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
        $pet = Pet::create($request->validated());
        return ApiResponse::success('Recurso creado con éxito', 201, $pet);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        //
        $pet = Pet::find($pet);
        return ApiResponse::success('Recurso encontrado con éxito', 200, $pet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pet $pet)
    {
        //
        $pet->update($request->validated());
        return ApiResponse::success('Recurso actualizacon con éxito', 200, $pet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        //
        $pet->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
