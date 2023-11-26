<?php

namespace App\Http\Controllers;

use App\Http\Requests\Diseases\StoreRequest;
use App\Http\Requests\Diseases\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $diseases = Disease::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada correctamente', 200, $diseases);
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
        $disease = Disease::create($request->validated());
        return ApiResponse::success('Recurso creado exitosamente', 201, $disease);
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        //
        $disease = Disease::find($disease);
        return ApiResponse::success('Recurso encontrado con éxito', 200, $disease);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Disease $disease)
    {
        //
        $disease->update($request->validated());
        return ApiResponse::success('Recurso actualizado correctamente', 200, $disease);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disease $disease)
    {
        //
        $disease->delete();
        return ApiResponse::success('Eliminado con éxito', 200, $disease);
    }
}
