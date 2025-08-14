<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusStandarRequest;
use App\Http\Requests\UpdateBusStandarRequest;
use App\Models\BusStandar;

class BusStandarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('armada.bus-standar');
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
    public function store(StoreBusStandarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BusStandar $busStandar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusStandar $busStandar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusStandarRequest $request, BusStandar $busStandar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusStandar $busStandar)
    {
        //
    }

    public function mediumBus35Seat()
    {
        return view('armada.bus-standar.detail-medium-bus-35-seat');
    }
    
    public function mediumBus31Seat()
    {
        return view('armada.bus-standar.detail-medium-bus-31-seat');
    }

    public function bigBus50Seat()
    {
        return view('armada.bus-standar.detail-big-bus-50-seat');
    }

    public function bigBus59Seat()
    {
        return view('armada.bus-standar.detail-big-bus-59-seat');
    }

    public function hiAceStandar()
    {
        return view('armada.bus-standar.detail-hi-ace-standar');
    }

    public function elfStandar18Seat()
    {
        return view('armada.bus-standar.detail-elf-standar-18-seat');
    }

}
