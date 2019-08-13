<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'user_id','date','departure_time','arrival_time','mileaage','driving_time','impression','map','private'
    ];
   
}
