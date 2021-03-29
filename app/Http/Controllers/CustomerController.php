<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lname' => 'required',
            'fname' => 'required',
            'address' => 'required',
            'phone' => 'required|min:11|numeric',

        ]);

        return Customer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return Customer::with('transaction')->where('customers.id', $customer->id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::find($customer->id);
        $customer->update($request->all());
        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        return Customer::destroy($customer->id);
    }
}
