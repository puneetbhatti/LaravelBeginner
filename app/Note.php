<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	 protected $fillable = ['note'];
    public function cards(){

    	return $this->belongsTo('\App\Card');
    }
}
