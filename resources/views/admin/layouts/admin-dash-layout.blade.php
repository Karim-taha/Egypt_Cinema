
@extends('admin.layouts.template')

@section('title')
    <title>Admin Dashboard</title>
@endsection
@section('base')
    <base href="{{ \URL::to('admin.layouts.admin-dash-layout')}}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">


              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h4 class="card-title">Steps to Create Event Day and Movies:</h4>
                  <br><br>
                  <p>1. <a href="{{ route('admin.createEventDay') }}" class="card-link">Create Event Day</a></p>
                  <p>2. <a href="{{route('admin.createMovie')}}" class="card-link">Create Movie</a></p>
                  <p>3. <a href="{{route('admin.createShowTime')}}" class="card-link">Create Show Times</a></p>
                </div>
              </div><!-- /.card -->
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>

@endsection



