<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusLuxuryRequest;
use App\Http\Requests\UpdateBusLuxuryRequest;
use App\Models\BusLuxury;

class BusLuxuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('armada.bus-luxury');
        
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
    public function store(StoreBusLuxuryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BusLuxury $busLuxury)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusLuxury $busLuxury)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusLuxuryRequest $request, BusLuxury $busLuxury)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusLuxury $busLuxury)
    {
        //
    }
}
