<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //

    public function firstForm(Request $request){
        $contact = Contact::all()->first();
        $contact->location_address= $request->input('name');
        $contact->save();
        return view('/admin-pages.contact')->with("contacts", $contact);
    }

    // public function contactForm(Request $request){
    //     $contact = Contact::all()->first();
    //     $contact->location_address= $request->input('name');
    //     $contact->phone_number= $request->input('phone');
    //     $contact->email= $request->input('email');
    //     $contact->facebook= $request->input('website');
    //     $contact->save();

    //     return view('admin-pages.contact')->with("contacts", $contact);
    // }
}
