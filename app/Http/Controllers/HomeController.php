<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class HomeController extends Controller
{

    public function mail(Request $contact)
	{
	   $name = $contact['name'];
	   Mail::to('niaz@gigidy.com')->send(new SendMailable($contact));   
	   return 'Email was sent';
	}
}
