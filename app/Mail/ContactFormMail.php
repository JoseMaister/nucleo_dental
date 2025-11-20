<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $locale;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     * @param string $locale
     * @return void
     */
    public function __construct($formData, $locale = 'en')
    {
        $this->formData = $formData;
        $this->locale = $locale;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $view = $this->locale === 'es' ? 'emails.contact-form-es' : 'emails.contact-form';
        
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                   ->subject(trans('messages.contact.email.title', [], $this->locale))
                   ->view($view);
    }
}
