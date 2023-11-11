<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetVaccines\StoreRequest;
use App\Http\Requests\PetVaccines\UpdateRequest;
use App\Models\Pets_vaccines;
use Illuminate\Http\Request;

class PetsVaccinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Pets_vaccines::paginate($request->get("per_page", 10));
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
        $pet_vaccine = Pets_vaccines::create($request->validated());
        return $pet_vaccine;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pets_vaccines $pet_vaccine)
    {
        //
        return  $pet_vaccine;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pets_vaccines $pet_vaccine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pets_vaccines $pet_vaccine)
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
        $pet_vaccine = Pets_vaccines::find($id);
        if (is_null($pet_vaccine)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $pet_vaccine->delete();
            return ('Eliminado con éxito');
        }
    }
}
