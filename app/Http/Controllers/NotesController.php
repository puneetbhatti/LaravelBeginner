<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
class NotesController extends Controller
{
	
	/**
	* function to store the notes
	*@return  error if validation fails or return success
	**/
	public function store(Request $request ,Card $card)
    {
    	//Validate the input values
    	 $this->validate($request, [
        	'note' => 'required|min:10',
    		]);
    	 //save the input values
  		  	$card->notes()->create(['note'=>$request->note]);
  		  	return back();	
    }
}
