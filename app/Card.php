<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $fillable = ['title','description'];
    public function notes(){

    	return 	$this->hasMany('\App\Note');
    }
}
