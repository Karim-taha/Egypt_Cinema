<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Hello Attendee</title>
    <style>
        .ticketBooked{
            color: green
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="text-center ticketBooked mt-5">Ticket has been booked</h2>

        <h3 class="text-center">Hello {{$attendee->att_name}} your ticket has been booked successfully.</h3>
        <p class="text-center">Thank you for boking a ticket with Egypt Cinema</p>
        <p class="text-center">Your Ticket Id number is: #{{$attendee->id}}</p>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
