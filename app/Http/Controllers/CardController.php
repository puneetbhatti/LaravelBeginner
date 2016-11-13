<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CardController extends Controller
{
	/**
	*Funtion to show index page with list of cards
	*@return view
	**/
    public function index(){
    	$card= \App\Card::all();	//call the all the cards using model
    	return view('cards.index',compact('card'));
    }

    public function show(\App\Card $card){
    	//	$card=\App\Card::find($id);
    	 $notes=$card->notes;
    	 return view('cards.show',compact('notes','card'));
    }

    /**
	* function to store the card
	*@return  error if validation fails or return success
	**/
	public function store(Request $request ,\App\Card $card)
    {
    	//Validate the input values
    	 $this->validate($request, [
        	'title' => 'required|min:5',
        	'description' => 'required|min:10',
    		]);
    	 //save the input values
  		  	$card->create($request->all());
  		  	return back();	
    }
    
}
