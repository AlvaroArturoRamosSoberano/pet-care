<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetBreedStoreRequest;
use App\Models\Pets_breeds;
use Illuminate\Http\Request;

class PetsBreedsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Pets_breeds::all();
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
    public function store(PetBreedStoreRequest $request)
    {
        //
        $pet_breeds = Pets_breeds::create($request->validated());
        return $pet_breeds;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pets_breeds $pets_breeds)
    {
        //
        return $pets_breeds;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pets_breeds $pets_breeds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pets_breeds $pets_breeds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pets_breeds $pets_breeds)
    {
        //
    }
}
