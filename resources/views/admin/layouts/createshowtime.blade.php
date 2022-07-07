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
            <form action="#" method="post">
                @csrf
                <label for="chooseEventDay">Choose Event Day :</label>
                <select class="form-select" id="chooseEventDay" name="eventday_id" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <br>
                <label for="chooseShowTime">Choose From Available Show Time in (Event Day) :</label>
                <select class="form-select" id="chooseShowTime" name="eventday_id" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <br>
                <label for="chooseMovie">Choose Movie :</label>
                <select class="form-select" id="chooseMovie" name="eventday_id" aria-label="Default select example">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <br>
                <input type="hidden" name="user_id" value="" id="">
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
