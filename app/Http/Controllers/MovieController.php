<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Movie;
use App\Models\Showtime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('layout.movies.index', ["movies" => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Movie $movie)
    {
        // return view('layout.movies.create', ["movie" => $movie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('m_image')->getClientOriginalName();
        $imageUpload = $request->file('m_image')->move(public_path('images'), $image);
        Movie::create([
            'm_name' => $request->input('m_name'),
            'ticket_price' => $request->input('ticket_price'),
            'm_image' => $image,
            'eventday_id' => $request->input('eventday_id'),
            'user_id' => $request->input('user_id'),
        ]);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('layout.movies.create', ["movie" => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
