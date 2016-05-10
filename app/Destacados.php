<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacados extends Model
{
    public function destacados_post()
	{
		return $this->belongsTo('App\Posts','post_id');
	}
}
