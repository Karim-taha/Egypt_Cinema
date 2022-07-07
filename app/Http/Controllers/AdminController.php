<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

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
        return view('admin.layouts.createmovie');
    }

    public function createShowTime(){
        return view('admin.layouts.createshowtime');
    }

}
