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
