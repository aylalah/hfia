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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
