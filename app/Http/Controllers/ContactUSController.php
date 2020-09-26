<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
use App\Mail\Order;
use App\User;
use Auth;
class ContactUSController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'message' => 'required'
        ]);
        
        $contact = Contact::create([
         'name' => $request->name,
         'email' => $request->email,
         'address' => $request->address,
         'message' => $request->message,

        ]);
        
        Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'address' => $request->get('address'),
           'user_message' => $request->get('message')
       ), function($message)
   {
     //  $message->from($email);
       $message->to('khaledahmed24680@gmail.com', 'Admin')->subject('new order');

   });
      
    //  Mail::to('khaledahmed24680@gmail.com')->send(new Order());  
      
       return back()->with('success', 'شكرا علي تواصلك معنا وسيتم الرد عليك في اقرب وقت!');
   }
}
