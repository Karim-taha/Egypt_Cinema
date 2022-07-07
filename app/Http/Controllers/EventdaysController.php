<?php

namespace App\Http\Controllers;

use App\Models\Eventday;
use Illuminate\Http\Request;

class EventdaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $eventDays = $request->all();
        // dd($eventDays);
        Eventday::create($eventDays);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventday  $eventday
     * @return \Illuminate\Http\Response
     */
    public function show(Eventday $eventday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventday  $eventday
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventday $eventday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventday  $eventday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventday $eventday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventday  $eventday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventday $eventday)
    {
        //
    }
}
