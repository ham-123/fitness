<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactMessageController extends Controller
{
    
    public function messages()
    {
        $messages = Contact::all(); 

        return view('Admin.contact.message', compact('messages'));
    }
}
