<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseFile extends Model
{
    protected $table = 'b8_casefiles';
    protected $guarded = [];

    public function req()
    {
        return $this->hasMany('App\Request');
    }

    public function court()
    {
        return $this->belongsTo('App\Court');
    }

    public function lawyer()
    {
        return $this->belongsTo('App\Lawyer');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
