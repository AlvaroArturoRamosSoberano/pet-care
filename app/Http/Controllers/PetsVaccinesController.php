<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetVaccineStoreRequest;
use App\Models\Pets_vaccines;
use Illuminate\Http\Request;

class PetsVaccinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Pets_vaccines::all();
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
    public function store(PetVaccineStoreRequest $request)
    {
        //
        $pet_vaccines = Pets_vaccines::create($request->validated());
        return $pet_vaccines;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pets_vaccines $pets_vaccines)
    {
        //
        return  $pets_vaccines;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pets_vaccines $pets_vaccines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pets_vaccines $pets_vaccines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pets_vaccines $pets_vaccines)
    {
        //
    }
}
