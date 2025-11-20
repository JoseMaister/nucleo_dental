<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

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

        try {
            // Get the current locale or default to 'en'
            $locale = app()->getLocale();
            
            // Send email to admin
            $adminEmail = config('nucleo.admin_email');
            Mail::to($adminEmail)->send(new ContactFormMail($validated, $locale));
            
            // Send confirmation email to the user
            if (!empty($validated['email'])) {
                Mail::to($validated['email'])->send(new ContactFormMail($validated, $locale));
            }
            
            return redirect()->back()->with('success', __('messages.contact.success'));
            
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'There was an error submitting the form. Please try again later.');
        }
    }
}