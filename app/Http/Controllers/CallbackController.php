<?php

namespace App\Http\Controllers;

use Request;
use App\callback;

class CallbackController extends Controller
{
    //
    public function store(Request $request){
    	callback::create(Request::all());
      	return view('about')->with('request_update' , 'SDC received your request. We will contact you ASAP.');
   }
}
