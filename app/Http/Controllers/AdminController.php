<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Eventday;
use App\Models\Showtime;

class AdminController extends Controller
{
    public function index(){
        return view('admin.layouts.admin-dash-layout');
    }


    // Function to show all movies in admin dashboard :
    public function movies(){

        $movies = Movie::all();
        return view('admin.layouts.admin-movies', ["movies" => $movies]);
    }

    // Function to create Event Day :
    public function creatEeventDay(){
        return view('admin.layouts.createeventday');
    }

    // Function to create Movie :
    public function createMovie(){
        $eventdays = Eventday::all();
        return view('admin.layouts.createmovie', ["eventdays" => $eventdays]);
    }

    // Function to create Show Time :
    public function createShowTime(){

        $eventdays = Eventday::all();
        $movies = Movie::all();
        $showtimes = Showtime::all();
        return view('admin.layouts.createshowtime')->with(["eventdays" => $eventdays,  "movies" => $movies, "showtimes" => $showtimes]);
    }

    public function editmovie($id){
        $movie = new Movie;
        $movie = $movie->findOrFail($id);
        $eventdays = Eventday::all();
        // dd($movie);
        return view('admin.layouts.editmovie', ["movie" => $movie], ["eventdays" => $eventdays]);
    }

    public function updatemovie($id){

        $image = request('m_image')->getClientOriginalName();
        $imageUpload = request('m_image')->move(public_path('images'), $image);

        $movie = new Movie;
        $movie = $movie->findorfail($id);
        // dd(request());
        $movie->m_name = request("m_name");
        $movie->ticket_price = request("ticket_price");
        $movie->m_image = request('m_image')->getClientOriginalName();
        $movie->eventday_id = request("eventday_id");
        $movie->user_id = request("user_id");
        $movie->save();
        return redirect()->route('admin.movies');
    }



    // $image = $request->file('m_image')->getClientOriginalName();
        // $imageUpload = $request->file('m_image')->move(public_path('images'), $image);
        // Movie::create([
        //     'm_name' => $request->input('m_name'),
        //     'ticket_price' => $request->input('ticket_price'),
        //     'm_image' => $image,
        //     'eventday_id' => $request->input('eventday_id'),
        //     'user_id' => $request->input('user_id'),

}
