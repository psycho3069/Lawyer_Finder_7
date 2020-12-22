<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'c4_educations';
	protected $guarded = [];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\DegreeCategory','degree_category_id');
    }

    public function ssc_board()
    {
        return $this->belongsTo('App\Board');
    }

    public function hsc_board()
    {
        return $this->belongsTo('App\Board');
    }
}
