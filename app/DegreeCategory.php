<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DegreeCategory extends Model
{
    protected $table = 'a07_degree_categories';
	protected $guarded = [];

	public function level()
    {
        return $this->belongsTo('App\DegreeLevel','degree_level_id');
    }

    public function education()
    {
        return $this->hasMany('App\Education','degree_category_id');
    }
}
