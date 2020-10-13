<?php

namespace App\Http\Controllers;

use App\SeismicStation;
use Illuminate\Http\Request;

class SeismicStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('digi.station.index', [
            'stations' => SeismicStation::has('data')
                            ->with('data')
                            ->withCount('data')
                            ->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SeismicStation  $seismicStation
     * @return \Illuminate\Http\Response
     */
    public function show(SeismicStation $seismicStation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeismicStation  $seismicStation
     * @return \Illuminate\Http\Response
     */
    public function edit(SeismicStation $seismicStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeismicStation  $seismicStation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeismicStation $seismicStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeismicStation  $seismicStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeismicStation $seismicStation)
    {
        //
    }
}
