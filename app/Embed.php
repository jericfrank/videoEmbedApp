<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Embed extends Model
{
    protected $table = 'embed';

    public function views()
	{
		return $this->hasMany('App\Views');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
