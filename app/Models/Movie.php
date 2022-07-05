<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Start Relation Functions :

    public function showtime(){
        return $this->hasOne(Showtime::class);
    }

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function attendee(){
        return $this->hasMany(Attendee::class);
    }

    public function eventday(){
        return $this->belongsTo(Eventday::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }



    // End Relation Functions :
}
