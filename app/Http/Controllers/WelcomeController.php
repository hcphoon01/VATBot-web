<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function policy()
    {
        return view('policy');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);
        Mail::send(new ContactMail($request));
        
        return back()->with('success', 'Thank you for your message.');
    }
}
