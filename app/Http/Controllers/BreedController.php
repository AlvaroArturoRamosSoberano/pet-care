<?php

namespace App\Http\Controllers;

use App\Http\Requests\Breeds\StoreRequest;
use App\Http\Requests\Breeds\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Breed;
use Exception;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $breeds = Breed::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada correctamente', 200, $breeds);
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
        $breed = Breed::create($request->validated());
        try {
            return ApiResponse::success('Recurso creado exitosamente', 201, $breed);
        } catch (Exception $e) {
            return ApiResponse::error('K gei', 422, $breed);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        //
        $breed = Breed::find($breed);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $breed);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Breed $breed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Breed $breed)
    {
        //
        $breed->update($request->validated());
        return ApiResponse::success('Recurso actualizado correctamente', 200, $breed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        //
        $breed->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
    public function breedPet(Breed $breed)
    {
        $breed->with('pets')->get();
        return ApiResponse::success('Petición ejecutada con éxito', 200);
    }
}
