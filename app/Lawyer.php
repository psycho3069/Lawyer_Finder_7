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
}
