<?php

namespace Bionictechbd\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Bionictechbd\Contact\Models\Contact;
use Bionictechbd\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
   public function index(){
    return view('contact::contact');
   }

   public function send(Request $request){
    
      Mail::to('nazim@gmail.com')->send(new ContactMailable($request->message, $request->name));
      Contact::create($request->all());
    
      return redirect(route('contact'));
   }
}