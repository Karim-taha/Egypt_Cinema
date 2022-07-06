@extends('admin.layouts.template')

@section('title')
    <title>Create Event Day</title>
@endsection
@section('base')
    <base href="{{ \URL::to('admin.layouts.createeventday')}}">
@endsection
@section('pageName1')
<h1 class="m-0">Create Event Day</h1>
@endsection
@section('pageName2')
<li class="breadcrumb-item"><a href="#">Create Event Day</a></li>
@endsection
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <form action="#" method="post">
                @csrf
                <div class="mb-3">
                    <label for="eventday">Event Day :</label>
                    <input type="date" id="eventday" name="eventday">
                </div>
                <input type="hidden" name="user_id" value="" id="">
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
        </div>
    </div>
</div>
@endsection
