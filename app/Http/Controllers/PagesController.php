<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use Auth;



class PagesController extends Controller
{
    

    public function index(){   

        $users = User::orderBy('id')->first();

        return view('index')->with('users', $users);
    }


    public function homepage(){  
        return view('admin-pages.homepage');
    }
    public function about(){
        return view('admin-pages.about');
    }
    public function ministry(){
        return view('admin-pages.ministry');
    }
    public function sermon(){
        return view('admin-pages.sermon');
    }
    public function event(){
        return view('admin-pages.event');
    }
    public function blog(){
        return view('admin-pages.blog');
    }
    public function contact(){
        // $contact = new Contact;
        // $contact->location_name = "Harvest Fire International Assembly";
        // $contact->location_address = "22/24 Salvation Road, Araromi, Oyo, Oyo State.";
        // $contact->phone_number = "08035066892";
        // $contact->email = "bishopgiftchuksn@yahoo.com";
        // $contact->facebook = "https://web.facebook.com/HarvestFireAssembly";
        // $contact->instagram = "IG";
        // $contact->twitter = "Twitter";
        // $contact->image = "images/bg_6.jpg";
        // $contact->map = "map link";
        // $contact->status = "True";
        // $contact->updated_by = Auth::user()->name;
        // $contact->created_by = Auth::user()->name;
        // $contact->save();

        $contact = Contact::orderBy('id')->first();

        return view('admin-pages.contact')->with("contacts", $contact);
    }
    public function shop(){
        return view('admin-pages.shop');
    }

    public function admin(){
        return view('admin-pages.admin');
    }
    public function members(){

        
        return view('admin-pages.members');
    }
    public function account(){
        return view('admin-pages.account');
    }
    public function order(){
        return view('admin-pages.order');
    }

}
