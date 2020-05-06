<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function create()
    {
    	return view()->make('contact.create') ;
    }

    public function store(ContactRequest $request)
    {

    	$mailable = new ContactMail($request->all());
    	Mail::to('admin@laracart.com')->send($mailable);
    	return "done :)";
    }
}
