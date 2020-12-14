<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $table = 'b6_lawyers';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function court()
    {
        return $this->belongsTo('App\Court');
    }

    public function req()
    {
        return $this->hasMany('App\Request');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Specialty','id');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating','taker_id');
    }
}
