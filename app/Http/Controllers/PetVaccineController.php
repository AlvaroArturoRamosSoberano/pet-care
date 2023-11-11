<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetVaccine\StoreRequest;
use App\Http\Requests\PetVaccine\UpdateRequest;
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
        return Pet_vaccine::paginate($request->get("per_page", 10));
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
        return $pet_vaccine;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet_vaccine $pet_vaccine)
    {
        //
        return  $pet_vaccine;
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
        return $pet_vaccine;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pet_vaccine = Pet_vaccine::find($id);
        if (is_null($pet_vaccine)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $pet_vaccine->delete();
            return ('Eliminado con éxito');
        }
    }
}
