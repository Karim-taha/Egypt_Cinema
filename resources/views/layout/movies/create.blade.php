<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Register a Ticket</title>
    <style>
        .allmovies{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center allmovies mt-5">Register a ticket</h2>
            <table class="table table-dark">
                <thead>
                    <th>Movie Name</th>
                    <th>Show Date</th>
                    <th>Show Time</th>
                    <th>Ticket Price</th>
                    <th>Poster</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="movie-name">{{$movie->m_name}}</td>
                        <td><p>{{$movie->eventday->eventday}}</p></td>
                        @if($movie->showtime->showtime == 1)
                        <td>6 PM - 8:30 PM</td>
                        @elseif($movie->showtime->showtime == 2)
                        <td>8:30 PM - 10:30 PM</td>
                        @else
                        <td>10:30 PM - 1 AM</td>
                        @endif
                        <td class="movie-name">{{$movie->ticket_price}} $</td>
                        <td><img src="{{asset('images/' . $movie->m_image)}}" alt="No Poster Yet" height="100" width="100"></td>
                    </tr>
                </tbody>
            </table>

            <form action="{{route('attendees.store', $movie->id)}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="att_name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="att_email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="text" name="att_phone" class="form-control" id="phone">
                </div>
                <input type="hidden" name="movie_id" value="{{$movie->id}}">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
