<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'user_id','date','departure_time','arrival_time','mileaage','driving_time','impression','map','private'
    ];

    public function user(){

        return $this->belongsTo(\App\User::class, 'user_id');
    }
   
}
