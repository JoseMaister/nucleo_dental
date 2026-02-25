<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, max-age=0, post-check=0, pre-check=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0, Tue, 01 Jan 1980 1:00:00 GMT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="theme-color" content="#ffffff">
    <title>@yield('title', 'Nucleo Dental')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans flex flex-col min-h-screen">
    @if(session()->has('locale'))
        <script>
            // Force a page reload to ensure all translations are loaded
            if (localStorage.getItem('currentLocale') !== '{{ session('locale') }}') {
                localStorage.setItem('currentLocale', '{{ session('locale') }}');
                window.location.reload();
            }
        </script>
    @endif
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Núcleo Dental" class="h-12">
            </a>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-indigo-600">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Desktop Links -->
            <div class="hidden md:block">
                <ul class="flex space-x-6 items-center">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.home') }}</a></li>
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.services') }}</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.about') }}</a></li>
                    <li><a href="{{ route('technology') }}" class="{{ request()->routeIs('technology') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.technology') }}</a></li>
                    <li><a href="{{ route('dental-tourism') }}" class="{{ request()->routeIs('dental-tourism') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.dental_tourism') }}</a></li>
                    <li><a href="{{ route('blog-educativo') }}" class="{{ request()->routeIs('blog-educativo') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.blog_educativo') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="bg-indigo-700 text-white px-5 py-2 rounded-full hover:bg-indigo-800 transition-colors {{ request()->routeIs('contact') ? 'bg-indigo-800' : '' }}">{{ __('messages.nav.contact') }}</a></li>
                    
                    <!-- Language Dropdown -->
                    <li class="relative group">
                        <button type="button" class="flex items-center gap-2 border px-3 py-1 rounded hover:bg-gray-100 focus:outline-none" id="languageDropdown">
                            @if(app()->getLocale() === 'es')
                                <img src="https://flagcdn.com/w20/mx.png" alt="ES" class="w-5 h-4">
                                <span>ES</span>
                            @else
                                <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-5 h-4">
                                <span>EN</span>
                            @endif
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <!-- Dropdown -->
                        <div class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-lg z-50 hidden group-hover:block">
                            <div class="py-1">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                       class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 {{ app()->getLocale() === $localeCode ? 'bg-gray-100' : '' }}">
                                        @if($localeCode === 'es')
                                            <img src="https://flagcdn.com/w20/mx.png" alt="ES" class="w-5 h-4">
                                            <span>ES</span>
                                        @else
                                            <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-5 h-4">
                                            <span>EN</span>
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- <div style="position: fixed; bottom: 0; left: 0; background: black; color: white; padding: 10px; z-index: 9999; font-family: monospace; font-size: 12px;">
                <div>App Locale: {{ app()->getLocale() }}</div>
                <div>Session Locale: {{ session('locale', 'not set') }}</div>
                <div>Config Locale: {{ config('app.locale') }}</div>
                <div>Current URL: {{ url()->current() }}</div>
                <div>Previous URL: {{ url()->previous() }}</div>
                <div>Session ID: {{ session()->getId() }}</div>
                <div>All Routes: 
                    @foreach(Route::getRoutes() as $route)
                        {{ $route->uri() }}<br>
                    @endforeach
                </div>
            </div> --}}
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 {{ request()->routeIs('home') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.home') }}</a>
                <a href="{{ route('services') }}" class="block px-3 py-2 {{ request()->routeIs('services') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.services') }}</a>
                <a href="{{ route('dental-tourism') }}" class="block px-3 py-2 {{ request()->routeIs('dental-tourism') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.dental_tourism') }}</a>
                <a href="{{ route('blog-educativo') }}" class="block px-3 py-2 {{ request()->routeIs('blog-educativo') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.blog_educativo') }}</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 {{ request()->routeIs('about') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.about') }}</a>
                <a href="{{ route('technology') }}" class="block px-3 py-2 {{ request()->routeIs('technology') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.technology') }}</a>
                <a href="{{ route('financing') }}" class="block px-3 py-2 {{ request()->routeIs('financing') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.financing') }}</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 {{ request()->routeIs('contact') ? 'text-indigo-700 bg-indigo-50 font-bold' : 'text-gray-700' }} hover:text-indigo-600 hover:bg-gray-50 rounded-md">{{ __('messages.nav.contact') }}</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-1">
        @yield('content')

        <!-- WhatsApp Chat Widget -->
        <div id="whatsapp-widget" class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-50 transition-all duration-300 ease-in-out">
            <!-- Chat Toggle Button -->
            <button id="whatsapp-toggle" class="bg-green-500 shadow-lg rounded-full px-2 sm:px-3 py-1.5 flex items-center hover:shadow-xl transition-all duration-200 max-w-[90vw] sm:max-w-none">
                <div class="relative flex-shrink-0">
                    <i class="fab fa-whatsapp text-xl sm:text-2xl text-white animate-swing"></i>
                    <span class="absolute -top-1 -right-1 h-2 w-2 sm:h-3 sm:w-3 bg-orange-500 rounded-full"></span>
                </div>
                <span id="whatsapp-text" class="ml-2 mr-1 sm:mr-2 text-xs sm:text-sm font-medium text-white whitespace-normal text-left">
                    {{ __('messages.whatsapp.button_text') }}
                </span>
                <i id="close-icon" class="fas fa-times hidden text-white text-lg sm:text-xl"></i>
            </button>

            <!-- Chat Modal -->
            <div id="chat-modal" class="hidden fixed sm:absolute bottom-16 sm:bottom-full right-0 sm:right-0 mb-2 sm:mb-4 w-[calc(100%-2rem)] sm:w-80 max-w-md bg-white rounded-lg shadow-xl overflow-hidden transform transition-all duration-300 ease-in-out" style="max-height: calc(100vh - 8rem);">
                <!-- Header -->
                <div class="bg-gradient-to-r from-green-500 to-green-600 p-3 sm:p-4 flex items-center">
                    <div class="relative flex-shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="Nucleo Dental" class="h-8 w-8 sm:h-10 sm:w-10 rounded-full object-cover border-2 border-white bg-white">
                        <span class="absolute bottom-0 right-0 h-2 w-2 sm:h-3 sm:w-3 bg-green-400 rounded-full border-2 border-white"></span>
                    </div>
                    <div class="ml-3 overflow-hidden">
                        <h3 class="text-sm sm:text-base font-bold text-white truncate">NUCLEO DENTAL</h3>
                        <p class="text-[10px] sm:text-xs text-green-100">{{ __('messages.whatsapp.front_desk') }}</p>
                    </div>
                </div>

                <!-- Chat Body -->
                <div class="p-3 sm:p-4 bg-gray-50 overflow-y-auto" style="max-height: calc(100vh - 16rem);">
                    <div class="flex items-start mb-3 sm:mb-4">
                        <div class="bg-white p-3 rounded-lg shadow-sm max-w-[90%] sm:max-w-[80%]">
                            <p class="text-xs sm:text-sm text-gray-700 leading-relaxed">{{ __('messages.whatsapp.welcome_message') }}</p>
                            <p class="text-[10px] sm:text-xs text-gray-400 text-right mt-1" id="message-time">now</p>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="p-2 sm:p-3 bg-white border-t">
                    <a href="https://wa.me/526563674969?text=Hola%20Nucleo%20Dental,%20me%20gustaría%20agendar%20una%20cita" 
                       target="_blank" 
                       class="block w-full bg-green-500 hover:bg-green-600 text-white py-2 px-3 sm:px-4 rounded-md text-xs sm:text-sm font-medium text-center transition-colors duration-200 flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2 text-sm sm:text-base"></i> 
                        <span>{{ __('messages.whatsapp.start_chat') }}</span>
                    </a>
                </div>
            </div>
        </div>

        <style>
            @keyframes rotate {
                0% { transform: rotate(0deg); }
                10% { transform: rotate(-15deg); }
                20% { transform: rotate(18deg); }
                30% { transform: rotate(-15deg); }
                40% { transform: rotate(12deg); }
                50% { transform: rotate(0deg); }
                100% { transform: rotate(0deg); }
            }
            .animate-swing {
                animation: rotate 6s ease-in-out infinite;
                transform-origin: center center;
            }
            #chat-modal {
                opacity: 0;
                transform: translateY(10px);
            }
            #chat-modal.show {
                opacity: 1;
                transform: translateY(0);
            }
            @media (max-width: 640px) {
                #whatsapp-widget {
                    bottom: 1rem;
                    right: 1rem;
                }
                #chat-modal {
                    width: calc(100% - 2rem);
                    margin: 0 1rem 0 0;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toggleBtn = document.getElementById('whatsapp-toggle');
                const chatModal = document.getElementById('chat-modal');
                const whatsappText = document.getElementById('whatsapp-text');
                const whatsappIcon = document.querySelector('#whatsapp-toggle .fa-whatsapp');
                const notificationDot = document.querySelector('#whatsapp-toggle .absolute');
                const closeIcon = document.getElementById('close-icon');
                const messageTime = document.getElementById('message-time');
                let isOpen = false;
                let timeInterval;
                let minutes = 0;

                // Update message time
                function updateTime() {
                    minutes++;
                    messageTime.textContent = minutes === 1 ? '1 minute ago' : `${minutes} minutes ago`;
                }

                // Toggle chat
                function toggleChat() {
                    isOpen = !isOpen;
                    
                    if (isOpen) {
                        // Open chat
                        chatModal.classList.remove('hidden');
                        setTimeout(() => chatModal.classList.add('show'), 10);
                        
                        // Update button state
                        whatsappText.classList.add('hidden');
                        whatsappIcon.classList.add('hidden');
                        notificationDot.classList.add('hidden');
                        closeIcon.classList.remove('hidden');
                        
                        // Start timer
                        timeInterval = setInterval(updateTime, 60000);
                        messageTime.textContent = 'now';
                    } else {
                        // Close chat
                        chatModal.classList.remove('show');
                        setTimeout(() => {
                            chatModal.classList.add('hidden');
                            
                            // Update button state after animation
                            whatsappText.classList.remove('hidden');
                            whatsappIcon.classList.remove('hidden');
                            notificationDot.classList.remove('hidden');
                            closeIcon.classList.add('hidden');
                        }, 300);
                        
                        // Stop timer
                        clearInterval(timeInterval);
                        minutes = 0;
                    }
                }

                // Toggle chat on button click
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleChat();
                });

                // Close when clicking outside
                document.addEventListener('click', function(event) {
                    if (isOpen && !toggleBtn.contains(event.target) && !chatModal.contains(event.target)) {
                        toggleChat();
                    }
                });

                // Prevent closing when clicking inside the modal
                chatModal.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            });
        </script>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            
            // Close language dropdown if open
            const langMenu = document.querySelector('.absolute.right-0.mt-2');
            if (langMenu) {
                langMenu.classList.add('hidden');
            }
        });

        // Language dropdown functionality
        document.addEventListener('DOMContentLoaded', function() {
            const langBtn = document.getElementById('languageDropdown');
            const langMenu = langBtn ? langBtn.nextElementSibling : null;
            
            if (langBtn && langMenu) {
                // Toggle menu on button click
                langBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    langMenu.classList.toggle('hidden');
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!langMenu.contains(e.target) && e.target !== langBtn) {
                        langMenu.classList.add('hidden');
                    }
                });

                // Close menu when a language is selected
                const langOptions = langMenu.querySelectorAll('a');
                langOptions.forEach(option => {
                    option.addEventListener('click', function() {
                        langMenu.classList.add('hidden');
                    });
                });
            }
        });

        // Close dropdowns when clicking anywhere on mobile
        document.addEventListener('click', function(e) {
            const langMenu = document.querySelector('.absolute.right-0.mt-2');
            const langBtn = document.getElementById('languageDropdown');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuBtn = document.getElementById('mobile-menu-button');
            
            // Close language dropdown if clicking outside
            if (langMenu && !langMenu.contains(e.target) && e.target !== langBtn) {
                langMenu.classList.add('hidden');
            }
            
            // Close mobile menu if clicking outside
            if (mobileMenu && !mobileMenu.contains(e.target) && e.target !== mobileMenuBtn && !e.target.closest('#mobile-menu-button')) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
