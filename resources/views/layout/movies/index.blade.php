<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .allmovies{
            color: blue;
        }

        .movie-name{
            color: yellow
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center allmovies">All Movies</h2>
        {{-- <a href="{{route('users.index')}}" class="btn btn-warning">All Users</a> --}}
        <div class="row">
    <table class="table table-dark">
        <thead>
            <th>Movie Name</th>
            <th>Show Date</th>
            <th>Show Time</th>
            <th>Ticket Price</th>
            <th>Poster</th>
            <th>Register</th>
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
                @else
                <td>10:30 PM - 1 AM</td>
                @endif
                <td class="movie-name">{{$movie->ticket_price}} $</td>
                <td><img src="{{asset('images/' . $movie->m_image)}}" alt="No Poster Yet" height="100" width="100"></td>
                <td><a href="{{route('movies.show', $movie->id)}}" class="btn btn-warning">Register</a></td>
                {{-- <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    {{-- <a href="{{route('posts.create')}}" class="btn btn-info">Add New Post</a> --}}
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
