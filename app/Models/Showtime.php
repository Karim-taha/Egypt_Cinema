<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'showtime',
        'eventday_id',
        'movie_id',
        'user_id',
    ];

    // Start Relation Functions :

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function eventday(){
        return $this->belongsTo(Eventday::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // End Relation Functions :
}
