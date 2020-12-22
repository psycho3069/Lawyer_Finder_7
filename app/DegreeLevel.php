<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DegreeLevel extends Model
{
    protected $table = 'a06_degree_levels';
	protected $guarded = [];

	public function category()
    {
        return $this->hasMany('App\DegreeCategory','degree_level_id');
    }
}
