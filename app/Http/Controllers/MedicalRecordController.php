<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalRecordStoreRequest;
use App\Models\Medical_record;
use Faker\Provider\Medical;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Medical_record::all();
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
    public function store(MedicalRecordStoreRequest $request)
    {
        //
        $medical_records = Medical_Record::create($request->all());
        return $medical_records;
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
    public function update(Request $request, Medical_record $medical_record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medical_record $medical_record)
    {
        //
    }
}
