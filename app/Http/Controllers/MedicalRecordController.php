<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalRecords\StoreRequest;
use App\Http\Requests\MedicalRecords\UpdateRequest;
use App\Models\Medical_record;
use Faker\Provider\Medical;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return Medical_record::paginate($request->get("per_page", 10));
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
        $medical_record = Medical_Record::create($request->all());
        return $medical_record;
    }

    /**
     * Display the specified resource.
     */
    public function show(Medical_record $medical_record)
    {
        //
        return $medical_record;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medical_record $medical_record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Medical_record $medical_record)
    {
        //
        $medical_record->update($request->all());
        return $medical_record;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $medical_record = Medical_record::find($id);
        if (is_null($medical_record)) {
            return response()->json(["message" => "No se pudo realizar correctamente la operación"], 0);
        } else {
            $medical_record->delete();
            return ('Eliminado con éxito');
        }
    }
}
