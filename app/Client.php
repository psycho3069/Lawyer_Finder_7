<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'b7_clients';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function req()
    {
        return $this->hasMany('App\Request');
    }
}
