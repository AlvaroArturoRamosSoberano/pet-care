<?php

namespace App\Http\Controllers;

use App\Http\Requests\Species\StoreRequest;
use App\Http\Requests\Species\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Specie;
use Illuminate\Http\Request;

class SpecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $species = Specie::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada con éxito', 200, $species);
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
        $species = Specie::create($request->validated());
        return ApiResponse::success('Recurso creado con éxito', 201, $species);
    }

    /**
     * Display the specified resource.
     */
    public function show(Specie $species)
    {
        //
        $species = Specie::find($species);
        return ApiResponse::success('Recurso encontrado con éxito', 200, $species);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specie $species)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Specie $species)
    {
        //
        $species->update($request->validated());
        return ApiResponse::success('Recurso actualizado con éxito', 200, $species);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specie $species)
    {
        //
        $species->delete();
        return ('Eliminado con éxito');
    }
}
