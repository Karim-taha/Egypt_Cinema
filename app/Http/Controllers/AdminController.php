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


    public function movies(){

        $movies = Movie::all();
        return view('admin.layouts.admin-movies', ["movies" => $movies]);
    }

    public function creatEeventDay(){
        return view('admin.layouts.createeventday');
    }

    public function createMovie(){
        $eventdays = Eventday::all();
        return view('admin.layouts.createmovie', ["eventdays" => $eventdays]);
    }

    public function createShowTime(){

        $eventdays = Eventday::all();
        $movies = Movie::all();
        $showtimes = Showtime::all();
        return view('admin.layouts.createshowtime')->with(["eventdays" => $eventdays,  "movies" => $movies, "showtimes" => $showtimes]);

    }

}
