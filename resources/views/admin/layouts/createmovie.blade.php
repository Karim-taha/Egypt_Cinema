@extends('admin.layouts.template')

@section('title')
    <title>Create Movie</title>
@endsection
@section('base')
    <base href="{{ \URL::to('admin.layouts.createmovie')}}">
@endsection
@section('pageName1')
<h1 class="m-0">Create Movie</h1>
@endsection
@section('pageName2')
<li class="breadcrumb-item"><a href="#">Create Movie</a></li>
@endsection
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="moviename">Movie Name :</label>
                        <input type="text" class="form-control" id="moviename" name="m_name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="ticketprice">Ticket Price ($) :</label>
                        <input type="number" class="form-control" id="ticketprice" name="ticket_price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="movieimage">Upload Movie Poster :</label>
                    <input type="file" class="form-control-file" name="m_image" id="movieimage">
                </div>
                <label for="chooseEventDay">Choose Event Day :</label>
                <select class="form-select" id="chooseEventDay" name="eventday_id" aria-label="Default select example">
                    @foreach ($eventdays as $eventday)
                        <option value="{{ $eventday->id}}">{{ $eventday->eventday}}</option>
                    @endforeach
                  </select>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="">
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection
