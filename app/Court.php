<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    protected $table = 'b1_courts';
    protected $guarded = [];

    public function lawyer()
    {
        return $this->hasOne('App\Lawyer');
    }

    public function casefile()
    {
        return $this->hasOne('App\CaseFile');
    }
}
