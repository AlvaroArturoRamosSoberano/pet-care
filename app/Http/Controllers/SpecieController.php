<?php

namespace App\Http\Controllers;

use App\Http\Requests\Species\StoreRequest;
use App\Http\Requests\Species\UpdateRequest;
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
        return Specie::paginate($request->get("per_page", 10));
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
        return $species;
    }

    /**
     * Display the specified resource.
     */
    public function show(Specie $species)
    {
        //
        return $species;
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
        return $species;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $species = Specie::find($id);
        if (is_null($species)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $species->delete();
            return ('Eliminado con éxito');
        }
    }
}
