<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    function fetchData()
    {
        $customer = customer::all()->toArray();
        return $customer;
    }
    public function index()
    {
       
        $data= array(
            'title'=>'Customers',
            'customer'=>$this->fetchData()
        );
        return view('customer.customers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array('title'=>'Add Customer');
        return view('customer.create', $data);
    }
    /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $storeData = $request->validate([
            'customer_id' => 'required|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
        $customer = customer::create($storeData);
        return redirect('/customer')->with('completed', 'Customer has been saved!');
    }
}
