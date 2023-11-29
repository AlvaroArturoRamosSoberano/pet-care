<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customers\StoreRequest;
use App\Http\Requests\Customers\UpdateRequest;
use App\Http\Responses\ApiResponse;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $customers = Customer::paginate($request->get("per_page", 10));
        return  ApiResponse::success('Petición ejecutada correctamente', 200, $customers);
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
        $customer = Customer::create($request->validated());
        return apiResponse::success('Recurso creado exitosamente', 201, $customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
        /* $customer = DB::table('customers')
            ->select('name', 'last_name', 'phone_number', 'image_path')->get(); */
        $customer->load('pets')->get();
        return apiResponse::success('Recurso encontrado exitosamente', 200, $customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Customer $customer)
    {
        //
        $customer->update($request->validated());
        return ApiResponse::success('Recurso actualizado correctamente', 200, $customer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return ApiResponse::success('Eliminado con éxito', 200);
    }
}
