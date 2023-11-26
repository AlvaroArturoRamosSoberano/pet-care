<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vaccines\StoreRequest;
use App\Http\Requests\Vaccines\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $vaccines = Vaccine::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada con éxito', 200, $vaccines);
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
        $vaccine = Vaccine::create($request->validated());
        return ApiResponse::success('Recurso creado con éxito', 201, $vaccine);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaccine $vaccine)
    {
        //
        $vaccine = Vaccine::find($vaccine);
        return ApiResponse::success('Recurso encontrado con éxito', 200, $vaccine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vaccine $vaccine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Vaccine $vaccine)
    {
        //
        $vaccine->update($request->validated());
        return ApiResponse::success('Recurso actualizado con éxito', 200, $vaccine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vaccine $vaccine)
    {
        //
        $vaccine->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
