<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'a08_boards';
    protected $guarded = [];

    public function education_ssc()
    {
        return $this->hasMany('App\Education','ssc_board_id');
    }

    public function education_hsc()
    {
        return $this->hasMany('App\Education','hsc_board_id');
    }
}
