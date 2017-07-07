<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    const HIDDEN = '0';
    const PUB = '1';
    const UPDATED = '2';
    const HOMEWIN = '1';
    const DRAWWIN = '2';
    const AWAYWIN = '3';

    protected $table = 'matches';
    public function bets(){
    	return $this->hasMany('App\Bet');
    }
}
