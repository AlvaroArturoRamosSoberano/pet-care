<?php

namespace App\Http\Controllers;

use App\Http\Requests\BreedStoreRequest;
use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Breed::all();
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
    public function store(BreedStoreRequest $request)
    {
        //
        $breeds = Breed::create($request->validated());
        return $breeds;
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
    public function update(Request $request, Breed $breed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        //
    }
}
