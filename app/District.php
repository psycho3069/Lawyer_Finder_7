<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'a02_districts';
    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo('App\Division');
    }
}
