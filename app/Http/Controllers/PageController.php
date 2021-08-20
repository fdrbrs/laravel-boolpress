<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('guests.welcome');
    }
    public function about(){
        return view('guests.about');
    }
    public function contacts(){
        return view('guests.contacts');
    }

    public function sendContactForm(Request $request){

        //validazione dati
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required | email',
            'message' =>'required'
        ]);

        //renderizzazione a schermo della mail
        //return (new ContactFormMail($validatedData))->render();

        Mail::to('admin@email.com')->send(new ContactFormMail($validatedData));
        return redirect()
        ->back()
        ->with('message_sent', 'eMail sent succesfully, thanks for contacting me, I will answer as soon as possible');
    }
}
