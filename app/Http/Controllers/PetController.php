<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pets\StoreRequest;
use App\Http\Requests\Pets\UpdateRequest;
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
        return Pet::paginate($request->get("per_page", 10));
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
        return $pet;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        //
        return $pet;
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
        return $pet;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pet = Pet::find($id);
        if (is_null($pet)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $pet->delete();
            return ('Eliminado con éxito');
        }
    }
}
