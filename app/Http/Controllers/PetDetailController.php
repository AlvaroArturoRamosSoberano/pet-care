<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetDetails\StoreRequest;
use App\Http\Requests\PetDetails\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Pet_detail;
use Illuminate\Http\Request;

class PetDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $pet_details = Pet_detail::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutado con éxito', 200, $pet_details);
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
        $pet_detail = Pet_detail::create($request->validated());
        return ApiResponse::success('Recurso creado con éxito', 201, $pet_detail);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet_detail $pet_detail)
    {
        //
        $pet_detail = Pet_detail::find($pet_detail);
        return ApiResponse::success('Recurso encontrado con éxito', 200, $pet_detail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet_detail $pet_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pet_detail $pet_detail)
    {
        //
        $pet_detail->update($request->validated());
        return ApiResponse::success('Recurso actualizado con éxito', 200, $pet_detail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet_detail $pet_detail)
    {
        //
        $pet_detail->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
