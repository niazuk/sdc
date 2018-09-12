<?php

namespace App\Http\Controllers;

use Request;
use App\callback;

class CallbackController extends Controller
{
    //
    
    public function store(Request $request){
    	$contact = [];
    	$contact = Request::all();

   /* 	$contact['name'] = $request->get('name');
    	$contact['email_id'] = $request->get('email_id');
    	$contact['phone_no'] = $request->get('phone_no');
    	$contact['message'] = $request->get('message'); */
    	//session(['contact' => $contact ]);
    	callback::create(Request::all());

    //	flash('Your message has been sent!')->success();
    	return redirect()->action('HomeController@mail', $contact);
      	//return view('about')->with('request_update' , 'SDC received your request. We will contact you ASAP.');
   }
}
