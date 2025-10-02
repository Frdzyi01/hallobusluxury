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

    // conteoller medium bus 31 seat
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

        // conteoller medium bus 35 seat
    public function detailMediumBus35SeatSinarJaya()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-sinar-jaya');
    }
    public function detailMediumBus35SeatBigBird()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-big-bird');
    }
    public function detailMediumBus35SeatBhaladika()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-bhaladika');
    }
    public function detailMediumBus35SeatWhiteHorse()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-white-horse');
    }
    public function detailMediumBus35SeatBusBlueStar()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-bus-blue-star');
    }
    public function detailMediumBus35SeatStarbus()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-starbus');
    }

    public function detailMediumBus35SeatBinIlyas()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-bin-ilyas');
    }
    public function detailMediumBus35SeatPutraTidar()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-putra-tidar');
    }
    public function detailMediumBus35SeatRejekiGemilang()
    {
      return view('list-po.po-bus-standar.detail-bus-35-seat.detail-medium-35seat-rejeki-gemilang');
    }
    
    // controller big bus 50 seat
   public function detailBigBus50SeatSinarJaya()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-sinar-jaya');
    }
    public function detailBigBus50SeatBigBird()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-big-bird');
    }
    public function detailBigBus50SeatBhaladika()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-bhaladika');
    }
    public function detailBigBus50SeatWhiteHorse()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-white-horse');
    }
    public function detailBigBus50SeatBusBlueStar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-bus-blue-star');
    }
    public function detailBigBus50SeatStarbus()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-starbus');
    }

    public function detailBigBus50SeatBinIlyas()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-bin-ilyas');
    }
    public function detailBigBus50SeatPutraTidar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-putra-tidar');
    }
    public function detailBigBus50SeatRejekiGemilang()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat.detail-big-bus-50seat-rejeki-gemilang');
    }

      // controller big bus 59 seat
   public function detailBigBus59SeatSinarJaya()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-sinar-jaya');
    }
    public function detailBigBus59SeatBigBird()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-big-bird');
    }
    public function detailBigBus59SeatBhaladika()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-bhaladika');
    }
    public function detailBigBus59SeatWhiteHorse()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-white-horse');
    }
    public function detailBigBus59SeatBusBlueStar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-bus-blue-star');
    }
    public function detailBigBus59SeatStarbus()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-starbus');
    }

    public function detailBigBus59SeatBinIlyas()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-bin-ilyas');
    }
    public function detailBigBus59SeatPutraTidar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-putra-tidar');
    }
    public function detailBigBus59SeatRejekiGemilang()
    {
      return view('list-po.po-bus-standar.detail-big-bus-59-seat.detail-big-bus-59seat-rejeki-gemilang');
    }

    // controller big bus 42 - 45 seat
    public function bigbus42_45Seat()
    {
      return view('list-po.po-bus-standar.big-bus-42-45-seat');
    }
    public function detailBigBus42_45SeatSinarJaya()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-sinar-jaya');
    }
    public function detailBigBus42_45SeatBigBird()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-big-bird');
    }
    public function detailBigBus42_45SeatBhaladika()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-bhaladika');
    }
    public function detailBigBus42_45SeatWhiteHorse()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-white-horse');
    }
    public function detailBigBus42_45SeatBusBlueStar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-bus-blue-star');
    }
    public function detailBigBus42_45SeatStarbus()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-starbus');
    }   
    public function detailBigBus42_45SeatBinIlyas()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-bin-ilyas');
    }
    public function detailBigBus42_45SeatPutraTidar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-putra-tidar');
    }
    public function detailBigBus42_45SeatRejekiGemilang()
    {
      return view('list-po.po-bus-standar.detail-big-bus-42-45-seat.detail-big-bus-42-45seat-rejeki-gemilang');
    } 

    // conteoller big bus 50 seat (2-2)
    public function bigbus50Seat22()
    {
      return view('list-po.po-bus-standar.big-bus-50-seat-2-2');
    }
    public function detailBigBus50Seat22SinarJaya()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-sinar-jaya');
    }
    public function detailBigBus50Seat22BigBird()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-big-bird');  
    }
    public function detailBigBus50Seat22Bhaladika()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-bhaladika');
    }
    public function detailBigBus50Seat22WhiteHorse()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-white-horse'); 
    }
    public function detailBigBus50Seat22BusBlueStar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-bus-blue-star'); 
    }
    public function detailBigBus50Seat22Starbus()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-starbus');
    } 
    public function detailBigBus50Seat22BinIlyas()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-bin-ilyas');
    }
    public function detailBigBus50Seat22PutraTidar()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-putra-tidar');
    }
    public function detailBigBus50Seat22RejekiGemilang()
    {
      return view('list-po.po-bus-standar.detail-big-bus-50-seat-2-2.detail-big-bus-50seat-2-2-rejeki-gemilang');
    }
    
}

