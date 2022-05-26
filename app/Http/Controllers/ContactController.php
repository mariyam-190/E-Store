<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;

use Illuminate\Http\Request;

use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('user.contact');
    }
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ];
        Mail::to('admin@admin.com')->send(new ContactMail($details));
        return back()->with('message' , 'Your Message has been Send');
    }
}
