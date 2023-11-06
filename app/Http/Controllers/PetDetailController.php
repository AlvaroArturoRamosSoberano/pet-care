<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetDetailStoreRequest;
use App\Models\Pet_detail;
use Illuminate\Http\Request;

class PetDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Pet_detail::all();
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
    public function store(PetDetailStoreRequest $request)
    {
        //
        $pet_details = Pet_detail::create($request->validated());
        return $pet_details;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet_detail $pet_detail)
    {
        //
        return $pet_detail;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet_detail $pet_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet_detail $pet_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet_detail $pet_detail)
    {
        //
    }
}
