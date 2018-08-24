<?php

namespace App\Http\Controllers;

use Request;
use App\callback;

class CallbackController extends Controller
{
    //
    public function store(Request $request){
    	callback::create(Request::all());
      	echo 'store';
   }
}
