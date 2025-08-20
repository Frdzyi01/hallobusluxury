<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusVIPRequest;
use App\Http\Requests\UpdateBusVIPRequest;
use App\Models\BusVIP;

class BusVIPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        return view('armada.bus-vip');
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
    public function store(StoreBusVIPRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BusVIP $busVIP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusVIP $busVIP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusVIPRequest $request, BusVIP $busVIP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusVIP $busVIP)
    {
        //
    }

    public function bigBusVip28_30Seat()
    {
        return view('armada.bus-vip.detail-big-bus-vip-28-30seat');
    }

    public function bigBusVip18Pax()
    {
        return view('armada.bus-vip.detail-big-bus-18-pax');
    }
    public function bigbusVip21SeatKonfigurasi2_1()
    {
        return view('armada.bus-vip.detail-Bigbus-VIP-21Seat-Konfigurasi2-1');
    }
    public function big_Bus_Vip_28_30Seat()
    {
        return view('armada.bus-vip.detail-Bigbus-VIP-28-30seat');
    }
}
