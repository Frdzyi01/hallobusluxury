<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\BusStandarController;
use App\Http\Controllers\BusLuxuryController;
use App\Http\Controllers\BusVIPController;
use App\Http\Controllers\KebijakanPrivasiController;
use App\Http\Controllers\PerizinanSewaController;
use App\Http\Controllers\KontakController;

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

// Halaman Kebijakan
Route::get('/kebijakan/kebijakan-sewa', [KebijakanPrivasiController::class, 'index'])->name('kebijakan.sewa');
Route::get('/kebijakan/perizinan-sewa', [PerizinanSewaController::class, 'index'])->name('perizinan.sewa');


