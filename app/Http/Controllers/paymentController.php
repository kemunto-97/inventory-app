<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\payment_modes;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function fetchData()
    {
        $payment = payment::all()->toArray();
        return $payment;
    }
    public function index()
    {
       
        $data= array(
            'title'=>'Payment',
            'payment'=>$this->fetchData()
        );
        return view('payments.payments', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array(
            'title'=>'Receive Payment',
            'modes'=>payment_modes::all()->toArray()
        );
        return view('payments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $storeData = $request->validate([

            'invoice_no' => 'required|max:255',
            'transaction_id' => 'required|max:255',
            'method' => 'required|max:255',
            'amount' => 'required|max:255',
        ]);
        
        $payment = payment::create($storeData);
        return redirect('/payment')->with('completed', 'Your payment have been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
