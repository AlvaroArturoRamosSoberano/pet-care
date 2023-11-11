<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetBreeds\StoreRequest;
use App\Http\Requests\PetBreeds\UpdateRequest;
use App\Models\Pets_breeds;
use Illuminate\Http\Request;

class PetsBreedsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Pets_breeds::paginate($request->get("per_page", 10));
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
        $pet_breed = Pets_breeds::create($request->validated());
        return $pet_breed;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pets_breeds $pet_breed)
    {
        //
        return $pet_breed;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pets_breeds $pet_breed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Pets_breeds $pet_breed)
    {
        //
        $pet_breed->update($request->validated());
        return $pet_breed;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pet_breed = Pets_breeds::find($id);
        if (is_null($pet_breed)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $pet_breed->delete();
            return ('Eliminado con éxito');
        }
    }
}
