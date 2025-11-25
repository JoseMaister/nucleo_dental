<footer class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo and Description -->
            <div class="space-y-4">
                <img src="{{ asset('images/logo.png') }}" alt="Nucleo Dental" class="h-12">
                <p class="text-gray-300">
                    {{ __('messages.footer.description', ['year' => date('Y')]) }}
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">{{ __('messages.footer.quick_links') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">{{ __('messages.nav.home') }}</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white">{{ __('messages.nav.services') }}</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">{{ __('messages.nav.about') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white">{{ __('messages.nav.contact') }}</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">{{ __('messages.footer.contact') }}</h3>
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                        <span class="text-gray-300">{{ __('messages.footer.address') }}</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <a href="tel:+526565625925" class="text-gray-300 hover:text-white">+52 656 562 5925</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <a href="mailto:info@nucleodental.com" class="text-gray-300 hover:text-white">info@nucleodental.com</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-gray-400">
            <p>{{ __('messages.footer.copyright', ['year' => date('Y')]) }}</p>
        </div>
    </div>
</footer>
