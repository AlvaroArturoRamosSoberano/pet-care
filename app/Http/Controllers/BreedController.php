<?php

namespace App\Http\Controllers;

use App\Http\Requests\Breeds\StoreRequest;
use App\Http\Requests\Breeds\UpdateRequest;
use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Breed::paginate($request->get("per_page", 10));
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
        return $breed;
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        //
        return $breed;
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
        return $breed;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $breed = Breed::find($id);
        if (is_null($breed)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operacón"], 404);
        } else {
            $breed->delete();
            return ('Eliminado con éxito');
        }
    }
}
