<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'c2_ratings';
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo('App\Client','giver_id');
    }

    public function lawyer()
    {
        return $this->belongsTo('App\Lawyer','taker_id');
    }
}
