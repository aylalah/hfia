<?php

use Illuminate\Support\Facades\Route;
use App\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', 'PagesController@index');

Route::get('/', function () {
    return view('index');
});

// Main Pages

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/events', function () {
    return view('pages.events');
});

Route::get('/contact', function () {
    $contact = Contact::orderBy('id')->first();

    // return view('admin-pages.contact')
    return view('pages.contact')->with("contacts", $contact);
});

Route::get('/ministry', function () {
    return view('pages.ministry');
});

Route::get('/sermons', function () {
    return view('pages.sermons');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog_details', function () {
    return view('pages.blog_detail');
});

Route::get('/shop', function () {
    return view('pages.shop');
});

// Admin Pages

Route::get('/adminLogin', function () {
    return view('admin-auth.login');
});

Route::get('/adminRegister', function () {
    return view('admin-auth.register');
});

// Route::get('/dashboard', function () {
//     return view('admin-pages.dashboard');
// });


Route::get('/order', 'PagesController@order');
Route::get('/admin', 'PagesController@admin');
Route::get('/members', 'PagesController@members');
Route::get('/account', 'PagesController@account');
Route::get('/homepage', 'PagesController@homepage');
Route::get('/adminAbout', 'PagesController@about');
Route::get('/adminMinistry', 'PagesController@ministry');
Route::get('/adminSermon', 'PagesController@sermon');
Route::get('/adminEvent', 'PagesController@event');
Route::get('/adminBlog', 'PagesController@blog');
Route::get('/adminContact', 'PagesController@contact');
Route::get('/adminShop', 'PagesController@shop');

// Submit Forms
Route::post('contactcontroller', 'ContactController@firstForm');
Route::view('adminContact', 'admin-pages.contact');
// Route::post('contactForm2', 'ContactController@contactForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
