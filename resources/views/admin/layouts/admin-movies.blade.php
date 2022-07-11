@extends('admin.layouts.template')

@section('title')
    <title>All Movies</title>
@endsection
@section('base')
    <base href="{{ \URL::to('admin.layouts.admin-movies')}}">
@endsection
@section('pageName1')
<h1 class="m-0">Movies</h1>
@endsection
@section('pageName2')
<li class="breadcrumb-item"><a href="#">Movies</a></li>
@endsection
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5">All Movies</h2>
                <table class="table table-dark mb-5">
                    <thead>
                        <th>Movie Name</th>
                        <th>Show Date</th>
                        <th>Show Time</th>
                        <th>Ticket Price</th>
                        <th>Poster</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr>
                            <td class="movie-name">{{$movie->m_name}}</td>
                            <td><a href="{{route('movies.show',$movie->eventday->id)}}">{{$movie->eventday->eventday}}</a></td>
                            @if($movie->showtime->showtime == 1)
                            <td>6 PM - 8:30 PM</td>
                            @elseif($movie->showtime->showtime == 2)
                            <td>8:30 PM - 10:30 PM</td>
                            @elseif($movie->showtime->showtime == 3)
                            <td>10:30 PM - 1 AM</td>
                            @else
                            <td>No Show Time Yet.</td>
                            @endif
                            <td class="movie-name">{{$movie->ticket_price}} $</td>
                            <td><img src="{{asset('images/' . $movie->m_image)}}" alt="No Poster Yet" height="100" width="100"></td>
                            <td><a href="{{ route('admin.editmovie', $movie->id) }}" class="btn btn-warning">Edit</a></td>
                            <form action="{{route('eventdays.destroy', $movie->eventday->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td><button class="btn btn-danger">Delete</button></td>
                            </form>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

