<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class HomeController extends Controller
{

    public function mail(Request $contact)
	{
	   Mail::to('niaz@gigidy.com')->send(new SendMailable($contact));   
	   return redirect('emailsend');
	}
}
