<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'a01_divisions';
    protected $guarded = [];

    public function district()
    {
        return $this->hasMany('App\District');
    }
}
