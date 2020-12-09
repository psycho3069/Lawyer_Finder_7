<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'c1_requests';
    protected $guarded = [];

    public function lawyer()
    {
        return $this->belongsTo('App\Lawyer');
    }

    public function client()
    {
        return $this->belongsTo('App\client');
    }

    public function casefile()
    {
        return $this->belongsTo('App\CaseFile');
    }
}
