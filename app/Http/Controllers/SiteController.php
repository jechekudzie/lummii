<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    //
    public function send_email(){

        $contact = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        //dd($contact);

        Mail::to('savings@lummii.energy')->send(new Contact($contact));
        return back()->with('message','Thank you for contacting us, will get back to you as soon as possible.');
    }
}
