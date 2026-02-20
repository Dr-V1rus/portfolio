<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        // Save to database
        $contact = Contact::create($request->all());

        // Send email notification
        try {
            Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($contact) {
                $message->to('wizlad3@gmail.com') 
                        ->subject('New Contact Message: ' . $contact->subject)
                        ->from($contact->email, $contact->name);
            });
        } catch (\Exception $e) {
            // Log error but don't stop the response
            \Log::error('Mail error: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully!'
        ]);
    }
}
