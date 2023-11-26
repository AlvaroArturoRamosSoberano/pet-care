<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalRecords\StoreRequest;
use App\Http\Requests\MedicalRecords\UpdateRequest;
use App\Http\Responses\ApiResponse;
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
        $medical_records = Medical_record::paginate($request->get("per_page", 10));
        return ApiResponse::success('Petición ejecutada con éxito', 200, $medical_records);
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
        $medical_record = Medical_Record::create($request->validated());
        return ApiResponse::success('Recurso creado exitosamente', 201, $medical_record);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medical_record $medical_record)
    {
        //
        $medical_record = Medical_Record::find($medical_record);
        return ApiResponse::success('Recurso encontrado exitosamente', 200, $medical_record);
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
        $medical_record->update($request->validated());
        return ApiResponse::success('Recurso actualizado correctamente', 200, $medical_record);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medical_record $medical_record)
    {
        //
        $medical_record->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
