<!DOCTYPE html>
<html>
<head>
    <title>{{ __('messages.contact.email.title') }}</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #4f46e5; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; border: 1px solid #e5e7eb; border-top: none; }
        .field { margin-bottom: 15px; }
        .field-label { font-weight: bold; display: block; margin-bottom: 5px; }
        .field-value { padding: 8px; background-color: #f9fafb; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ __('messages.contact.email.title') }}</h1>
        </div>
        <div class="content">
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.name') }}:</span>
                <div class="field-value">{{ $formData['name'] }}</div>
            </div>
            
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.email') }}:</span>
                <div class="field-value">{{ $formData['email'] }}</div>
            </div>
            
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.phone') }}:</span>
                <div class="field-value">{{ $formData['phone'] }}</div>
            </div>
            
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.services') }}:</span>
                <div class="field-value">
                    @if(is_array($formData['services']))
                        {{ implode(', ', $formData['services']) }}
                    @else
                        {{ $formData['services'] }}
                    @endif
                </div>
            </div>
            
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.best_time') }}:</span>
                <div class="field-value">
                    @if(is_array($formData['best_time']))
                        {{ implode(', ', $formData['best_time']) }}
                    @else
                        {{ $formData['best_time'] }}
                    @endif
                </div>
            </div>
            
            @if(!empty($formData['referral']))
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.referral') }}:</span>
                <div class="field-value">{{ $formData['referral'] }}</div>
            </div>
            @endif
            
            @if(!empty($formData['comments']))
            <div class="field">
                <span class="field-label">{{ __('messages.contact.email.comments') }}:</span>
                <div class="field-value">{{ $formData['comments'] }}</div>
            </div>
            @endif
        </div>
    </div>
</body>
</html>
