<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use App\Models\customer;
use Illuminate\Http\Request;

class invoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function fetchData()
    {
        $invoices = invoices::all()->toArray();
        return $invoices;
    }
    public function index()
    {
       
        $data= array(
            'title'=>'Invoices',
            'invoices'=>$this->fetchData()
        );
        return view('invoices.invoices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array(
            'title'=>'New Invoice',
            'names'=>customer::all()->toArray()
        );
        return view('invoices.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([

            'order_id' => 'required|max:255',
            'order_receiver_name' => 'required|max:255',
            'order_receiver_adress' => 'required|max:255',
            'order_total_amount_due' => 'required|max:255',
            'order_total_amount_paid' => 'required|max:255',

        ]);
        $invoices = invoices::create($storeData);
        
        return redirect('/invoice')->with('completed','InVoice saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function show(invoices $invoices)
    {
        return $invoices;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoices $invoices)
    {
        //
    }
}
