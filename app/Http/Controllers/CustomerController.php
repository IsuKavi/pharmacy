<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATION
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required|integer|gt:0',
            'gender' => 'required',
            'contact' => 'nullable|regex:/^((?:(0))[0-9]{9})$/',
        ]);

        //CREATE ITEM
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->gender = $request->input('gender');
        $customer->contact = $request->input('contact');
        $customer->address = $request->input('address');
        $customer->save();

        return redirect('/')->with('success', 'Customer Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //VALIDATION
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required|integer|gt:0',
            'gender' => 'required',
            'contact' => 'nullable|regex:/^((?:(0))[0-9]{9})$/',
        ]);

        // UPDATE CUSTOMER
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->gender = $request->input('gender');
        $customer->contact = $request->input('contact');
        $customer->address = $request->input('address');
        $customer->save();

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer Deleted');
    }
}
