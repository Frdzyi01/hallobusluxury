<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerizinanSewaRequest;
use App\Http\Requests\UpdatePerizinanSewaRequest;
use App\Models\PerizinanSewa;

class PerizinanSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kebijakan.perizinan-sewa');
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
    public function store(StorePerizinanSewaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PerizinanSewa $perizinanSewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerizinanSewa $perizinanSewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerizinanSewaRequest $request, PerizinanSewa $perizinanSewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerizinanSewa $perizinanSewa)
    {
        //
    }
}
