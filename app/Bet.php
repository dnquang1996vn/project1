<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    // display betting place
    const PLACEHOME = 0;
    const PLACEDRAW = 1;
    const PLACEAWAY = 2;


    // const display status 
    const HAPPENING =0;
    const WIN = 1;
    const LOST = 2;
    protected $table = 'bets';
    public function users(){
    	return $this->belongsTo('App\User');
    }
    public function matches(){
    	return $this->belongsTo('App\Match');
    }
}
