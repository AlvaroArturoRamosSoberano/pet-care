<?php

namespace App\Http\Controllers;

use App\Http\Requests\Diseases\StoreRequest;
use App\Http\Requests\Diseases\UpdateRequest;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Disease::paginate($request->get("per_page", 10));
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
        $disease = Disease::create($request->validated());
        return $disease;
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        //
        return $disease;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Disease $disease)
    {
        //
        $disease->update($request->validated());
        return $disease;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $disease = Disease::find($id);
        if (is_null($disease)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $disease->delete();
            return ('Eliminado con éxito');
        }
    }
}
