<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'a04_specialties';
    protected $guarded = [];

    public function lawyer()
    {
        return $this->hasOne('App\Lawyer','specialties_id');
    }
}
