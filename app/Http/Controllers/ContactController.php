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
], [
    'name.required' => __('messages.contact.validation.name_required'),
    'name.string' => __('messages.contact.validation.name_string'),
    'name.max' => __('messages.contact.validation.name_max'),
    'email.required' => __('messages.contact.validation.email_required'),
    'email.email' => __('messages.contact.validation.email_email'),
    'email.max' => __('messages.contact.validation.email_max'),
    'phone.required' => __('messages.contact.validation.phone_required'),
    'phone.string' => __('messages.contact.validation.phone_string'),
    'phone.max' => __('messages.contact.validation.phone_max'),
    'services.required' => __('messages.contact.validation.services_required'),
    'services.array' => __('messages.contact.validation.services_array'),
    'services.*.string' => __('messages.contact.validation.services_*_string'),
    'best_time.required' => __('messages.contact.validation.best_time_required'),
    'best_time.array' => __('messages.contact.validation.best_time_array'),
    'best_time.*.string' => __('messages.contact.validation.best_time_*_string'),
    'referral.string' => __('messages.contact.validation.referral_string'),
    'referral.max' => __('messages.contact.validation.referral_max'),
    'comments.string' => __('messages.contact.validation.comments_string'),
]);

        try {
            // // Get the current locale or default to 'en'
            // $locale = app()->getLocale();
            
            // // Send email to admin
            // $adminEmail = config('nucleo.admin_email');
            // Mail::to($adminEmail)->send(new ContactFormMail($validated, $locale));
            
            // // Send confirmation email to the user
            // if (!empty($validated['email'])) {
            //     Mail::to($validated['email'])->send(new ContactFormMail($validated, $locale));
            // }
            
            return redirect()->back()->with('success', __('messages.contact.success'));
            
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'There was an error submitting the form. Please try again later.');
        }
    }
}