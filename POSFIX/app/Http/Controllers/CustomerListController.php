<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerListRequest;
use App\Http\Requests\UpdateCustomerListRequest;
use App\Models\CustomerList;

class CustomerListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCustomerListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerList $customerList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerList $customerList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerListRequest $request, CustomerList $customerList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerList $customerList)
    {
        //
    }
}
