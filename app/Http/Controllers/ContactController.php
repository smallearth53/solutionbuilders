<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
//        $this->validate(request(), [
//           'name'  => 'required',
//           'email' => 'required', 
//           'phone' => 'required',
//           'comment' => 'required'
//        ]);
//        
        
        
        Contact::create(request(['name', 'email', 'phone', 'comment']));
        
        $email = request('email');
        
        \Mail::to($email)->send(new ContactMail);
       
        
        return redirect('/contact');
        
        
    }
    
}
