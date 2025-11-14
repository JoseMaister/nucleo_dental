<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'services' => 'required|array',
            'services.*' => 'string',
            'best_time' => 'required|array',
            'best_time.*' => 'string',
            'referral' => 'nullable|string|max:255',
            'comments' => 'nullable|string',
        ]);

        // Here you can:
        // 1. Save to database
        // 2. Send email notification
        // 3. Send confirmation email to the user

        // Example email sending (you'll need to set up mail configuration)
        // Mail::to('your-email@example.com')->send(new ContactFormSubmitted($validated));

        return redirect()->back()->with('success', 'Thank you for your message. We will contact you soon!');
    }
}