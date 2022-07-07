<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventday extends Model
{
    use HasFactory;

    protected $fillable = [
        'eventday',
        'user_id',
    ];

    // Start Relation Functions :

    public function showtime(){
        return $this->hasMany(Showtime::class);
    }

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function movie(){
        return $this->hasMany(Movie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // End Relation Functions
}
