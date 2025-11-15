@php
    use Illuminate\Support\Str;
    
    $services = [
        'Scheduling Appointment', 'Dental Implants', 'Wisdom Teeth', 'Veneers',
        'Root Canal', 'Orthodontic', 'Jaw Surgery', 'TMJ Disorder', 
        'Zygomatic Implants', 'General Dentistry', 'Evaluation', 
        'Cosmetic Dentistry', 'Full Mouth Reconstruction'
    ];
    
    $bestTimes = ['Morning', 'Afternoon'];
@endphp
<div class="relative flex flex-col lg:flex-row min-h-[600px] w-full">
    <!-- Left Side - Image with Overlay -->
    <div class="relative w-full lg:w-1/2 overflow-hidden">
        <div class="absolute inset-0 bg-indigo-900/90 z-10"></div>
        <img 
            src="{{ asset('images/100338.webp') }}" 
            alt="Dental Office"
            class="absolute inset-0 w-full h-full object-cover"
            style="object-position: center center; object-fit: cover; transform: scale(1.6); transform-origin: center center;"
        >
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Right Side - Contact Form -->
    <div class="w-full lg:w-1/2 bg-white p-8 pb-0 lg:p-12 xl:p-16 lg:pb-0 xl:pb-0">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Request an Appointment</h2>
        
        <div class="space-y-6 text-gray-700 mb-8">
            <p>The first step towards a beautiful, healthy smile is to schedule an appointment. Please contact our office by phone or complete the appointment request form below.</p>
            <p>Our scheduling coordinator will contact you to confirm your appointment. If you are an existing patient, this contact form should not be utilized for communicating private health information.</p>
        </div>

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" novalidate>
            @csrf
            
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" required 
                    value="{{ old('name') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your E-mail Address <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" required
                    value="{{ old('email') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Your Phone Number <span class="text-red-500">*</span></label>
                <input type="tel" id="phone" name="phone" required
                    value="{{ old('phone') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('phone') border-red-500 @enderror">
                @error('phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Services Checkbox Group -->
            <div>
                <p class="block text-sm font-medium text-gray-700 mb-2">I am interested in <span class="text-red-500">*</span></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    @foreach($services as $service)
                        <div class="flex items-center">
                            <input type="checkbox" id="service-{{ Str::slug($service) }}" 
                                name="services[]" value="{{ $service }}"
                                {{ in_array($service, old('services', [])) ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <label for="service-{{ Str::slug($service) }}" class="ml-2 text-sm text-gray-700">
                                {{ $service }}
                            </label>
                        </div>
                    @endforeach
                    @error('services')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Best Time Checkbox Group -->
            <div class="pt-2">
                <p class="block text-sm font-medium text-gray-700 mb-2">Best Time for Appointment <span class="text-red-500">*</span></p>
                <div class="flex space-x-6">
                    @foreach($bestTimes as $time)
                        <div class="flex items-center">
                            <input type="checkbox" id="time-{{ Str::slug($time) }}" 
                                name="best_time[]" value="{{ $time }}"
                                {{ in_array($time, old('best_time', [])) ? 'checked' : '' }}
                                class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <label for="time-{{ Str::slug($time) }}" class="ml-2 text-sm text-gray-700">
                                {{ $time }}
                            </label>
                        </div>
                    @endforeach
                    @error('best_time')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- How did you hear about us -->
            <div>
                <label for="referral" class="block text-sm font-medium text-gray-700 mb-1">How did you hear about us?</label>
                <input type="text" id="referral" name="referral"
                    value="{{ old('referral') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('referral') border-red-500 @enderror">
                @error('referral')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Comments/Questions -->
            <div>
                <label for="comments" class="block text-sm font-medium text-gray-700 mb-1">Comments/Questions</label>
                <textarea id="comments" name="comments" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 @error('comments') border-red-500 @enderror">{{ old('comments') }}</textarea>
                @error('comments')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</div>