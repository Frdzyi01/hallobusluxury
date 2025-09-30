<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\BusStandarController;
use App\Http\Controllers\BusLuxuryController;
use App\Http\Controllers\BusVIPController;
use App\Http\Controllers\KebijakanPrivasiController;
use App\Http\Controllers\PerizinanSewaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\listpostandarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Utama (Dashboard)
Route::get('/', function () {
    return view('dashboard');
});

// Halaman Tentang Kami
Route::get('/tentangkami', [TentangkamiController::class, 'index'])->name('tentangkami');

// Halaman Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Halaman Armada
Route::get('/armada/bus-standar', [BusStandarController::class, 'index'])->name('bus.standar');
Route::get('/armada/bus-luxury', [BusLuxuryController::class, 'index'])->name('bus.luxury');
Route::get('/armada/bus-vip', [BusVIPController::class, 'index'])->name('bus.vip');


// Halaman Armada Detail Bus Luxury
Route::get('/armada/bus-luxury/hi-ace-premio-luxury', [BusLuxuryController::class, 'hiAcePremioLuxury'])->name('bus.luxury.hiace');
Route::get('/armada/bus-luxury/big-bus-45seat', [BusLuxuryController::class, 'bigBus45Seat'])->name('bus.luxury.bigbus');

// Halaman Armada Detail Bus VIP
Route::get('/armada/bus-vip/big-bus-vip-28-30seat', [BusVIPController::class, 'bigBusVip28_30Seat'])->name('bus.vip.bigbus-28-30seat');
Route::get('armada/bus-vip/big-bus-18-pax', [BusVIPController::class, 'bigBusVip18Pax'])->name('bus.vip.bigbus-18-pax');
Route::get('armada/bus-vip/bigbus-vip-21-seat-konfigurasi-2-1', [BusVIPController::class, 'bigbusVip21SeatKonfigurasi2_1'])->name('bus.vip.bigbus-21-seat-konfigurasi-2-1');
Route::get('/armada/bus-vip/detail-big-bus-vip-28-30seat', [BusVIPController::class, 'big_Bus_Vip_28_30Seat'])->name('bus.vip.detail-big-bus-vip-28-30seat');

// Halaman Armada Detail Bus Standar
Route::get('/armada/bus-standar/medium-bus-35-seat', [BusStandarController::class, 'mediumBus35Seat'])->name('bus.standar.medium-bus-35seat');
Route::get('/armada/bus-standar/medium-bus-31-seat', [BusStandarController::class, 'mediumBus31Seat'])->name('bus.standar.medium-bus-31seat');
Route::get('armada/bus-standar/big-bus-50-seat', [BusStandarController::class, 'bigBus50Seat'])->name('bus.standar.big-bus-50-seat');
Route::get('armada/bus-standar/big-bus-50-seat-2-2', [BusStandarController::class, 'bigBus50Seat22'])->name('bus.standar.big-bus-50-seat-2-2');
Route::get('armada/bus-standar/big-bus-59-seat', [BusStandarController::class, 'bigBus59Seat'])->name('bus.standar.big-bus-59-seat');
Route::get('armada/bus-standar/hi-ace-standar', [BusStandarController::class, 'hiAceStandar'])->name('bus.standar.hi-ace-standar');
Route::get('armada/bus-standar/elf-standar-18-seat', [BusStandarController::class, 'elfStandar18Seat'])->name('bus.standar.elf-standar-18-seat');
Route::get('armada/bus-standar/detail-big-bus-42-45-seat', [BusStandarController::class, 'bigBus42_45Seat'])->name('bus.standar.detail-big-bus-42-45-seat');




// Halaman Kebijakan
Route::get('/kebijakan/kebijakan-sewa', [KebijakanPrivasiController::class, 'index'])->name('kebijakan.sewa');
Route::get('/kebijakan/perizinan-sewa', [PerizinanSewaController::class, 'index'])->name('perizinan.sewa');

// Halaman Mitra Kami
Route::get('/mitra/partner', [PartnerController::class, 'index'])->name('mitra.partner');

// Halaman List Po Standar
Route::get('list-po/po-bus-standar/medium-bus-35-seat', [listpostandarController::class, 'listPoMediumBus35Seat'])->name('list-po.po-bus-standar.medium-bus-35-seat');
Route::get('list-po/po-bus-standar/medium-bus-31-seat', [listpostandarController::class, 'listPoMediumBus31Seat'])->name('list-po.po-bus-standar.medium-bus-31-seat');
Route::get('list-po/po-bus-standar/big-bus-50-seat', [listpostandarController::class, 'bigBus50Seat'])->name('list-po.po-bus-standar.big-bus-50-seat');
Route::get('list-po/po-bus-standar/big-bus-59-seat', [listpostandarController::class, 'bigBus59Seat'])->name('list-po.po-bus-standar.big-bus-59-seat');
Route::get('list-po/po-bus-standar/hi-ace-standar', [listpostandarController::class, 'hiAceStandar'])->name('list-po.po-bus-standar.hi-ace-standar');
Route::get('list-po/po-bus-standar/elf-standar-18-seat', [listpostandarController::class, 'elfStandar18Seat'])->name('list-po.po-bus-standar.elf-standar-18-seat');
Route::get('list-po/po-bus-standar/big-bus-50-seat-2-2', [listpostandarController::class, 'bigBus50Seat22'])->name('list-po.po-bus-standar.big-bus-50-seat-2-2');
Route::get('list-po/po-bus-standar/big-bus-42-45-seat', [listpostandarController::class, 'bigBus42_45Seat'])->name('list-po.po-bus-standar.big-bus-42-45-seat');

//detail bus standar
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-sinar-jaya', [listpostandarController::class, 'detailMediumBus31SeatSinarJaya'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-sinar-jaya');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-big-bird', [listpostandarController::class, 'detailMediumBus31SeatBigBird'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-big-bird');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-bhaladika', [listpostandarController::class, 'detailMediumBus31SeatBhaladika'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bhaladika');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-white-horse', [listpostandarController::class, 'detailMediumBus31SeatWhiteHorse'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-white-horse');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-blue-star', [listpostandarController::class, 'detailMediumBus31SeatBusBlueStar'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-blue-star');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-starbus', [listpostandarController::class, 'detailMediumBus31SeatStarbus'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-starbus');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-bin-ilyas', [listpostandarController::class, 'detailMediumBus31SeatBinIlyas'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bin-ilyas');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-putra-tidar', [listpostandarController::class, 'detailMediumBus31SeatPutraTidar'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-putra-tidar');
Route::get('list-po/po-bus-standar/detail-bus-31-seat/detail-medium-bus-31seat-bus-rejeki-gemilang', [listpostandarController::class, 'detailMediumBus31SeatBusRejekiGemilang'])->name('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bus-rejeki-gemilang');