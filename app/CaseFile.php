<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseFile extends Model
{
    protected $table = 'b2_casefiles';
    protected $guarded = [];

    public function req()
    {
        return $this->hasMany('App\Request');
    }
}
