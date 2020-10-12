<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use App\Auth;



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
        $contact = Contact::all();

        return view('admin-pages.contact')->with("contacts", $contact[1]);
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
