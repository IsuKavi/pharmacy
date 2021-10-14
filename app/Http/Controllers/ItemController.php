<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemController extends Controller
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

        $date = Carbon::today()->addWeeks(2)->toDateString();

        //VALIDATION
        $this->validate($request, [
            'batchNo' => 'required',
            'name' => 'required',
            'qty' => 'required|integer|gt:0',
            'unitPrice' => 'required|numeric|gt:0',
            'exp' => 'required|date|after_or_equal:' . $date
        ]);

        //CREATE ITEM
        $item = new Item;
        $item->batchNo = $request->input('batchNo');
        $item->name = $request->input('name');
        $item->qty = $request->input('qty');
        $item->unitPrice = $request->input('unitPrice');
        $item->exp = $request->input('exp');
        $item->save();

        return redirect('/')->with('success', 'Item Added');
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

        $date = Carbon::today()->addWeeks(2)->toDateString();

        //VALIDATION
        $this->validate($request, [
            'batchNo' => 'required',
            'name' => 'required',
            'qty' => 'required|integer|gt:0',
            'unitPrice' => 'required|numeric|gt:0',
            'exp' => 'required|date|after_or_equal:' . $date
        ]);

        // UPDATE ITEM
        $item = Item::findOrFail($id);
        $item->batchNo = $request->input('batchNo');
        $item->name = $request->input('name');
        $item->qty = $request->input('qty');
        $item->unitPrice = $request->input('unitPrice');
        $item->exp = $request->input('exp');
        $item->save();

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('/items')->with('success', 'Item Deleted');
    }
}
