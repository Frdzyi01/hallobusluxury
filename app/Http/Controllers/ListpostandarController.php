<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelistpostandarRequest;
use App\Http\Requests\UpdatelistpostandarRequest;
use App\Models\listpostandar;

class ListpostandarController extends Controller
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
    public function store(StorelistpostandarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(listpostandar $listpostandar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(listpostandar $listpostandar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelistpostandarRequest $request, listpostandar $listpostandar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(listpostandar $listpostandar)
    {
        //
    }

    public function listPoMediumBus35Seat()
    {
      return view('list-po.po-bus-standar.medium-bus-35-seat');
    }

    public function listPoMediumBus31Seat()
    {
      return view('list-po.po-bus-standar.medium-bus-31-seat');
    }
    public function bigBus50Seat()
    {
      return view('list-po.po-bus-standar.big-bus-50-seat');
    }
    public function bigBus59Seat()
    {
      return view('list-po.po-bus-standar.big-bus-59-seat');
    }
    public function hiAceStandar()
    {
      return view('list-po.po-bus-standar.hi-ace-standar');
    }

    public function detailMediumBus31SeatSinarJaya()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-sinar-jaya');
    }

    public function detailMediumBus31SeatBigBird()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-big-bird');
    }
    public function detailMediumBus31SeatBhaladika()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-bhaladika');
    }

    public function detailMediumBus31SeatWhiteHorse()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-white-horse');
    }
    public function detailMediumBus31SeatBusBlueStar()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-bus-blue-star');
    }
    public function detailMediumBus31SeatStarbus()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-starbus');
    }

    public function detailMediumBus31SeatBinIlyas()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-bin-ilyas');
    }
    public function detailMediumBus31SeatPutraTidar()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-putra-tidar');
    }
    public function detailMediumBus31SeatBusRejekiGemilang()
    {
      return view('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-31seat-bus-rejeki-gemilang');
    }
}

