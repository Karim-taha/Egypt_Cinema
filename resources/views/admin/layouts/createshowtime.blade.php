@extends('admin.layouts.template')

@section('title')
    <title>Create Movie</title>
@endsection
@section('base')
    <base href="{{ \URL::to('admin.layouts.createshowtime')}}">
@endsection
@section('pageName1')
<h1 class="m-0">Create Show Time</h1>
@endsection
@section('pageName2')
<li class="breadcrumb-item"><a href="#">Create Show Time</a></li>
@endsection
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="{{ route('showtimes.store')}}" method="post">
                @csrf
                <label for="chooseEventDay">Choose Event Day :</label>
                <select class="form-select" id="chooseEventDay" name="eventday_id" aria-label="Default select example">
                    @foreach ($eventdays as $eventday)
                        <option value="{{ $eventday->id}}">{{ $eventday->eventday}}</option>
                    @endforeach
                </select>
                <br><br>
                <label for="chooseMovie">Choose Movie :</label>
                <select class="form-select" id="chooseMovie" name="movie_id" aria-label="Default select example">
                    @foreach($movies as $movie)
                    <option value="{{ $movie->id}}">{{ $movie->m_name}}</option>
                    @endforeach
                  </select>
                  <br><br>
                {{-- <label for="chooseShowTime">Choose Show Time :</label>
                <select class="form-select" id="chooseShowTime" name="showtime" aria-label="Default select example">
                        <option value="1">6 PM - 8:30 PM</option>
                        <option value="2">8:30 PM - 10:30 PM</option>
                        <option value="3">10:30 PM - 1 AM</option>
                </select> --}}
                @foreach($showtimes as $showtime)

                @endforeach
                    @if($showtimes->isNotEmpty())
                        <label for="chooseShowTime">Choose Show Time :</label>
                        <select class="form-select" id="chooseShowTime" name="showtime" aria-label="Default select example">
                            <option value="1">6 PM - 8:30 PM</option>
                            <option value="2">8:30 PM - 10:30 PM</option>
                            <option value="3">10:30 PM - 1 AM</option>
                        </select>
                    @else
                        <label for="chooseShowTime">Choose Show Time :</label>
                        <select class="form-select" id="chooseShowTime" name="showtime" aria-label="Default select example">
                            <option value="1">6 PM - 8:30 PM</option>
                            <option value="2">8:30 PM - 10:30 PM</option>
                            <option value="3">10:30 PM - 1 AM</option>
                        </select>
                @endif
                  <br>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
