<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

	protected $fillable = array('name','description','cover_photo');

    public function photo()
    {
    	return $this->hasMany('App\Photo');
    }
}
