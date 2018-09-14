<?php

namespace App\Http\Controllers;

use Request;
use App\ContactForm;

class ContactFormController extends Controller
{ 

    public function store(Request $request){
    	$contact = [];
    	$contact = Request::all();    

   /* 	$contact['name'] = $request->get('name');
    	$contact['email_id'] = $request->get('email_id');
    	$contact['phone_no'] = $request->get('phone_no');
    	$contact['message'] = $request->get('message'); */
    	//session(['contact' => $contact ]);
    	ContactForm::create(Request::all());

    //	flash('Your message has been sent!')->success();
    	return redirect()->action('HomeController@mail', $contact);
      	//return view('emailsend');
   }
}
