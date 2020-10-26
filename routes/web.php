<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/events', function () {
    return view('pages.events');
});

Route::get('/contact', function () {
    return view('pages.contact');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
