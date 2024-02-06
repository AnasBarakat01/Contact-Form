<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $req)
    {
        // Compare the previously submitted data with the new one
        if(session('name')==$req->name && session('email')==$req->email && session('phone')==$req->phone && session('subject')==$req->subject && session('message')==$req->message)
        {
            return  redirect('/#contact')->with(['redundant'=>
                            "This form has already submitted before !!"])->withInput();
        }
        else
        {
            $req->validate([
                'name'=> 'required',
                'email' => 'required|email',
                'phone' => 'required|digits:10|numeric',
                'subject' => 'required',
                'message' => 'required',
            ]);
    
            Contact::create($req->all());

            // store values in session
            session(['name'=> $req->name,'email'=> $req->email, 'phone'=> $req->phone,
            'subject'=> $req->subject, 'message'=> $req->message]);

            return redirect('/#contact')->with(['success' =>
                                'Thank you for contact us. we will contact you shortly.'])->withInput(); 
        }
    }



}

