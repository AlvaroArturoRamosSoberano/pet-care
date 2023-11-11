<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vaccines\StoreRequest;
use App\Http\Requests\Vaccines\UpdateRequest;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Vaccine::paginate($request->get("per_page", 10));
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
        $vaccine = Vaccine::create($request->validated());
        return $vaccine;
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaccine $vaccine)
    {
        //
        return $vaccine;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vaccine $vaccine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Vaccine $vaccine)
    {
        //
        $vaccine->update($request->validated());
        return $vaccine;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $vaccine = Vaccine::find($id);
        if (is_null($vaccine)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $vaccine->delete();
            return ('Eliminado con éxito');
        }
    }
}
