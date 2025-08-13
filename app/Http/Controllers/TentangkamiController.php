<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretentangkamiRequest;
use App\Http\Requests\UpdatetentangkamiRequest;
use App\Models\tentangkami;

class TentangkamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tentangkami');
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
    public function store(StoretentangkamiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tentangkami $tentangkami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tentangkami $tentangkami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetentangkamiRequest $request, tentangkami $tentangkami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tentangkami $tentangkami)
    {
        //
    }
}
