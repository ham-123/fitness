<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ClicontactController extends Controller
{
    public function indexcontact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('con_name');
        $contact->email = $request->input('con_email');
        $contact->message = $request->input('con_message');
        $contact->save();
        
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès.');
    }
}
