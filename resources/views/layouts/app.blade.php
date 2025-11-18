<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nucleo Dental')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    <li><a href="{{ route('financing') }}" class="{{ request()->routeIs('financing') ? 'text-indigo-600 font-bold' : 'text-gray-700' }} hover:text-indigo-600 transition-colors">{{ __('messages.nav.financing') }}</a></li>
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
    </main>

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
