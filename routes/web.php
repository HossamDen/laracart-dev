<?php

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

use App\Mail\Contact;

Route::get('/', "pagesController@home")->name('home');

Route::get('about-us', "pagesController@about")->name('about');

Route::get('contact-us', "contactController@create")->name('contact.create');

Route::post('contact' , "contactController@store")->name('contact.store');

Route::get('/mail' , function(){
	return new Contact;
});