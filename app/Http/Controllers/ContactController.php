<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Function to handle the form submission
    public function sendMessage(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // You can now send an email or store the message in the database, for example:
        // Send an email (example using Laravel Mail)
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send('emails.contact', $details, function ($message) use ($request) {
            $message->from($request->email);
            $message->to('admin@example.com'); // Your admin email
            $message->subject('Contact Form Message from ' . $request->name);
        });

        // You can also redirect the user with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
