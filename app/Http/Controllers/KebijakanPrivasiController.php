<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKebijakanPrivasiRequest;
use App\Http\Requests\UpdateKebijakanPrivasiRequest;
use App\Models\KebijakanPrivasi;

class KebijakanPrivasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kebijakan.kebijakan-sewa');
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
    public function store(StoreKebijakanPrivasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KebijakanPrivasi $kebijakanPrivasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KebijakanPrivasi $kebijakanPrivasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKebijakanPrivasiRequest $request, KebijakanPrivasi $kebijakanPrivasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KebijakanPrivasi $kebijakanPrivasi)
    {
        //
    }
}
