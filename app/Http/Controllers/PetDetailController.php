<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetDetails\StoreRequest;
use App\Http\Requests\PetDetails\UpdateRequest;
use App\Models\Pet_detail;
use Illuminate\Http\Request;

class PetDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Pet_detail::paginate($request->get("per_page", 10));
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
        $pet_detail = Pet_detail::create($request->validated());
        return $pet_detail;
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
    public function update(UpdateRequest $request, Pet_detail $pet_detail)
    {
        //
        $pet_detail->update($request->validated());
        return $pet_detail;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pet_detail = Pet_detail::find($id);
        if (is_null($pet_detail)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 404);
        } else {
            $pet_detail->delete();
            return ('Eliminado con éxito');
        }
    }
}
