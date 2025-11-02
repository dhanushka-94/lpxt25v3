<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'LAPTOP EXPERT - Brand New & Used Laptops, Repair & Service, Accessories in Sri Lanka')</title>
    <meta name="description" content="@yield('description', 'Laptop Expert - Your trusted destination for brand new and used laptops, laptop repair services, and all laptop accessories in Sri Lanka. Expert service, quality products, and affordable prices.')">
    <meta name="keywords" content="@yield('keywords', 'laptops Sri Lanka, brand new laptops, used laptops, laptop repair, laptop service, laptop accessories, laptop parts, laptop screen repair, laptop battery, laptop charger, Laptop Expert, Sri Lanka, Colombo')">
    <meta name="author" content="Laptop Expert">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'LAPTOP EXPERT - Brand New & Used Laptops in Sri Lanka')">
    <meta property="og:description" content="@yield('og_description', 'Laptop Expert - Brand new and used laptops, professional laptop repair & service, and all laptop accessories in Sri Lanka. Expert technicians, quality products.')">
    <meta property="og:image" content="@yield('og_image', asset('laptop-expert.webp'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="Laptop Expert">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'LAPTOP EXPERT - Brand New & Used Laptops in Sri Lanka')">
    <meta name="twitter:description" content="@yield('og_description', 'Laptop Expert - Brand new and used laptops, professional laptop repair & service, and all laptop accessories in Sri Lanka. Expert technicians, quality products.')">
    <meta name="twitter:image" content="@yield('og_image', asset('laptop-expert.webp'))">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KKQL508WYS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-KKQL508WYS');
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Fira+Code:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
    
    
    <!-- Cart Animation Styles -->
    <style>
        @keyframes cartShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-2px) rotate(-1deg); }
            75% { transform: translateX(2px) rotate(1deg); }
        }
        
        @keyframes cartBounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        @keyframes cartGlow {
            0%, 100% { box-shadow: 0 0 5px rgba(16, 185, 129, 0.3); }
            50% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.8); }
        }
        
        .cart-animate-shake {
            animation: cartShake 0.5s ease-in-out;
        }
        
        .cart-animate-bounce {
            animation: cartBounce 0.3s ease-in-out;
        }
        
        .cart-animate-glow {
            animation: cartGlow 1s ease-in-out;
        }
        
        .cart-success-flash {
            background: linear-gradient(45deg, #10b981, #059669) !important;
            color: white !important;
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-100 font-sans antialiased">
    
    <!-- Top Contact Bar - Modern Redesign -->
    <div class="relative bg-gradient-to-r from-[#0a0a0a] via-black to-[#0a0a0a] border-b border-blue-500/20 shadow-lg shadow-blue-500/5 overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-64 h-64 rounded-full bg-blue-500/3 blur-3xl -top-32 left-1/4"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-center py-2 sm:py-3 text-sm">
                <!-- Contact Information -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 md:space-x-6 text-gray-300 text-center sm:text-left w-full sm:w-auto mb-2 sm:mb-0">
                    <div class="flex items-center justify-center sm:justify-start space-x-2 group cursor-pointer min-h-[44px] py-1">
                        <div class="w-9 h-9 sm:w-8 sm:h-8 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-4 sm:h-4 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                        <div>
                            <a href="tel:0764442221" class="text-sm sm:text-sm font-medium text-gray-300 group-hover:text-blue-400 transition-colors block leading-tight">076 444 222 1</a>
                            <div class="flex items-center justify-center sm:justify-start gap-1.5 mt-0.5">
                                <a href="tel:0112960660" class="text-xs text-gray-500 hover:text-blue-400 transition-colors sm:hidden">011 296 066 0</a>
                                <span class="text-xs text-gray-500 hidden sm:inline">011 296 066 0</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden sm:block w-px h-5 bg-blue-500/20"></div>
                    
                    <div class="flex items-center justify-center sm:justify-start space-x-2 group cursor-pointer min-h-[44px] py-1">
                        <div class="w-9 h-9 sm:w-8 sm:h-8 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-4 sm:h-4 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                        <a href="mailto:info@laptopexpert.lk" class="text-sm sm:text-sm font-medium text-gray-300 group-hover:text-blue-400 transition-colors break-all sm:break-normal">info@laptopexpert.lk</a>
                </div>
                </div>
                
                <!-- Right Side: Delivery & Social -->
                <div class="flex flex-row items-center justify-center sm:justify-end space-x-3 sm:space-x-4 md:space-x-6 text-xs w-full sm:w-auto">
                    <!-- Delivery Info -->
                    <div class="flex items-center space-x-1.5 sm:space-x-2 bg-blue-500/10 px-2.5 sm:px-3 py-1.5 sm:py-1.5 rounded-lg border border-blue-500/20 group hover:bg-blue-500/20 hover:border-blue-500/40 transition-all min-h-[36px]">
                        <svg class="w-4 h-4 text-blue-400 group-hover:text-blue-300 transition-colors flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-blue-400 font-medium text-xs sm:text-xs hidden sm:inline whitespace-nowrap">Island Wide Express Delivery</span>
                        <span class="text-blue-400 font-medium text-xs sm:hidden whitespace-nowrap">Express Delivery</span>
                    </div>

                    <!-- Social Media Links -->
                    <div class="flex items-center space-x-1.5 sm:space-x-2">
                        <span class="text-gray-500 text-xs hidden lg:inline mr-1">Follow:</span>
                        <div class="flex space-x-1.5 sm:space-x-2">
                            <a href="https://www.facebook.com/laptopexpert" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-7 h-7 bg-gray-800/50 hover:bg-[#1877f2] rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110 border border-gray-700/50 hover:border-[#1877f2]"
                               title="Follow us on Facebook">
                                <svg class="w-3.5 h-3.5 text-gray-400 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/@laptopexpert" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-7 h-7 bg-gray-800/50 hover:bg-[#ff0000] rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110 border border-gray-700/50 hover:border-[#ff0000]"
                               title="Subscribe to our YouTube channel">
                                <svg class="w-3.5 h-3.5 text-gray-400 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@laptopexpert.lk" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-7 h-7 bg-gray-800/50 hover:bg-black hover:border-white rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110 border border-gray-700/50"
                               title="Follow us on TikTok">
                                <svg class="w-3.5 h-3.5 text-gray-400 hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Unified Header with Navigation - Modern Redesign -->
    <header class="relative bg-gradient-to-b from-[#0a0a0a] via-black to-[#0a0a0a] border-b border-blue-500/30 sticky top-0 z-[9999] shadow-xl shadow-blue-500/10 navigation-header backdrop-blur-sm">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-96 h-96 rounded-full bg-blue-500/3 blur-3xl -top-48 right-1/4"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
            <!-- Top Row: Logo, Search, Account -->
            <div class="flex items-center justify-between h-24 sm:h-28 md:h-32 lg:h-36 border-b border-blue-500/20 gap-2 sm:gap-3 md:gap-4">
                <!-- Logo Section - Enhanced -->
                <div class="flex items-center flex-shrink-0 min-w-0">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 sm:space-x-3 md:space-x-4 group">
                        <div class="relative flex items-center flex-shrink-0">
                            <div class="absolute inset-0 bg-blue-500/20 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="{{ asset('laptop-expert.webp') }}" 
                                 alt="Laptop Expert Logo" 
                                 class="relative w-16 h-16 sm:w-20 sm:h-20 md:w-28 md:h-28 lg:w-36 lg:h-36 object-contain transform group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="hidden sm:block min-w-0">
                            <h1 class="text-base sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 bg-clip-text text-transparent group-hover:from-blue-300 group-hover:via-blue-400 group-hover:to-blue-500 transition-all duration-300 truncate">
                                LAPTOP EXPERT
                            </h1>
                            <p class="text-xs sm:text-sm md:text-base text-gray-400 hidden md:block mt-0.5 truncate">Your Trusted Laptop Solution Provider</p>
                        </div>
                    </a>
                </div>

                <!-- Search Bar - Enhanced Design -->
                <div class="flex-1 mx-2 sm:mx-3 md:mx-6 lg:mx-8 min-w-0">
                    <!-- Mobile Search Button -->
                    <button class="md:hidden p-2.5 min-w-[44px] min-h-[44px] text-gray-300 hover:text-blue-400 transition-all duration-200 rounded-lg hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30 flex items-center justify-center" id="mobile-search-toggle">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    
                    <!-- Desktop Search - Modern Design -->
                    <form action="{{ route('products.search') }}" method="GET" class="relative hidden md:block" id="search-form">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-blue-600/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative flex items-center">
                                <input type="text" name="q" placeholder="Search laptops, parts, accessories..." 
                                       class="w-full bg-[#0a0a0a]/90 border border-blue-500/30 text-white px-5 py-3 pl-14 pr-32 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all duration-200 placeholder-gray-500 backdrop-blur-sm group-hover:border-blue-500/50" 
                               value="{{ request('q') }}" 
                               id="search-input"
                               autocomplete="off">
                                <svg class="w-5 h-5 absolute left-5 text-blue-400 group-hover:text-blue-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                                <button type="submit" class="absolute right-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-5 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-200 text-sm font-semibold shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50 hover:scale-105 flex items-center space-x-2">
                                    <span>Search</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                        </button>
                            </div>
                        </div>
                        
                        <!-- Search Suggestions Dropdown -->
                        <div id="search-suggestions" class="absolute top-full left-0 right-0 bg-[#0a0a0a]/95 border border-blue-500/30 rounded-xl shadow-2xl shadow-blue-500/20 mt-2 hidden z-[9999] max-h-80 overflow-y-auto backdrop-blur-md">
                            <!-- Suggestions will be populated here -->
                        </div>
                    </form>
                </div>

                <!-- Right side items -->
                <div class="flex items-center space-x-1.5 sm:space-x-2 md:space-x-3 flex-shrink-0">
                    <!-- Enhanced Account Section -->
                    @auth
                        <div class="relative group">
                            <div class="flex items-center space-x-1.5 sm:space-x-2 text-gray-300 hover:text-blue-400 transition-all duration-200 cursor-pointer py-1.5 sm:py-2 px-2 sm:px-3 rounded-xl hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30 min-w-[44px] min-h-[44px] sm:min-w-0 sm:min-h-0 justify-center sm:justify-start">
                                <div class="relative flex-shrink-0">
                                    <div class="w-9 h-9 sm:w-8 sm:h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg shadow-blue-500/40 ring-2 ring-blue-500/20 group-hover:ring-blue-500/50 transition-all">
                                        <span class="text-white font-bold text-sm">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    </div>
                                    <div class="absolute -top-0.5 -right-0.5 w-2.5 h-2.5 bg-green-400 border-2 border-black rounded-full shadow-sm"></div>
                                </div>
                                <div class="hidden lg:block">
                                    <p class="text-sm font-semibold truncate max-w-[120px]">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-gray-500">Account</p>
                                </div>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-400 transition-colors hidden sm:block flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                            
                            <!-- Account Dropdown - Modern Design -->
                            <div class="absolute top-full right-0 mt-2 w-64 bg-[#0a0a0a]/95 border border-blue-500/30 rounded-xl shadow-2xl shadow-blue-500/20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-[9999] backdrop-blur-md">
                                <div class="py-2">
                                    <a href="{{ route('user.dashboard') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 border-l-2 border-transparent hover:border-blue-500">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                        </svg>
                                        Dashboard
                                    </a>
                                    <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 border-l-2 border-transparent hover:border-blue-500">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        Profile Settings
                                    </a>
                                    <a href="{{ route('user.orders') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 border-l-2 border-transparent hover:border-blue-500">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        My Orders
                                    </a>
                                    <a href="{{ route('orders.track') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 border-l-2 border-transparent hover:border-blue-500">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                        </svg>
                                        Track Order
                                    </a>
                                    <a href="{{ route('user.settings') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 border-l-2 border-transparent hover:border-blue-500">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Settings
                                    </a>
                                    <hr class="my-2 border-blue-500/20">
                                    <a href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                       class="flex items-center px-4 py-2 text-red-400 hover:bg-red-900/20 hover:text-red-300 transition-colors">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                        </svg>
                                        Logout
                                    </a>
                                </div>
                            </div>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="flex items-center space-x-1.5 sm:space-x-2 text-gray-300 hover:text-blue-400 transition-all duration-200 py-1.5 sm:py-2.5 px-2 sm:px-3 rounded-xl hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30 min-w-[44px] min-h-[44px] sm:min-w-0 sm:min-h-0 justify-center sm:justify-start">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="text-sm font-medium hidden sm:block">Account</span>
                        </a>
                    @endauth

                    <!-- Enhanced Cart Section -->
                    <a href="{{ route('cart.index') }}" class="relative cart-container group hidden sm:flex items-center space-x-2 md:space-x-3 text-gray-300 hover:text-blue-400 transition-all duration-200 py-1.5 sm:py-2.5 px-2 sm:px-3 md:px-4 rounded-xl hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30 min-h-[44px]">
                        <div class="relative flex-shrink-0">
                            <svg class="w-6 h-6 cart-icon transition-all duration-300 group-hover:scale-110 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"/>
                            </svg>
                        </div>
                        <div class="hidden lg:block min-w-[90px]">
                            <div class="flex flex-col items-start">
                                <span class="text-sm font-semibold">Cart</span>
                                <span class="cart-total text-xs text-gray-400 font-medium">LKR 0.00</span>
                            </div>
                        </div>
                    </a>

                    <!-- Mobile Cart Icon -->
                    <a href="{{ route('cart.index') }}" class="relative cart-container-mobile group sm:hidden flex items-center text-gray-300 hover:text-blue-400 transition-all duration-200 py-2 px-2.5 rounded-xl hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30 min-w-[44px] min-h-[44px] justify-center">
                        <div class="relative">
                            <svg class="w-6 h-6 cart-icon-mobile transition-all duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"/>
                            </svg>
                        </div>
                        <div class="ml-1.5 min-w-[60px] hidden xs:block">
                            <span class="cart-total text-xs text-gray-400 font-medium">LKR 0.00</span>
                        </div>
                    </a>

                    <!-- Mobile menu button -->
                    <button class="md:hidden p-2.5 min-w-[44px] min-h-[44px] hover:bg-blue-500/10 rounded-xl transition-all duration-200 border border-transparent hover:border-blue-500/30 flex items-center justify-center" id="mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-300 hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Bottom Row: Navigation Menu - Modern Design -->
            <div class="hidden md:flex items-center justify-center space-x-2 lg:space-x-4 h-16 bg-gradient-to-r from-blue-500/5 via-blue-500/10 to-blue-500/5 border-t border-blue-500/20">
                <a href="{{ route('home') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('home') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('home') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Home
                    </span>
                </a>
                
                <!-- Categories Dropdown -->
                <div class="relative group">
                    <button class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold flex items-center whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('categories.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }}" id="categories-dropdown-trigger">
                        <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('categories.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        Categories
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180" id="categories-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <!-- Categories Dropdown Menu - Enhanced Design -->
                    <div class="absolute top-full left-0 w-80 md:w-96 bg-[#0a0a0a]/95 border border-blue-500/30 rounded-xl shadow-2xl shadow-blue-500/20 opacity-0 invisible md:group-hover:opacity-100 md:group-hover:visible transition-all duration-200 z-[9999] dropdown-menu max-h-[70vh] overflow-hidden backdrop-blur-md" id="categories-dropdown-menu">
                        <div class="py-3">
                            <!-- Dropdown Header -->
                            <div class="px-4 pb-3 border-b border-blue-500/20">
                                <h3 class="text-blue-400 font-semibold text-sm">Browse Categories</h3>
                            </div>
                            
                            <!-- Categories List with Scrolling -->
                            <div class="py-2 max-h-[60vh] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-900">
                                @foreach($menuCategories as $category)
                                    <!-- Main Category -->
                                    <div class="mb-1">
                                        @if($category->subcategories->count() > 0)
                                            <!-- Main Category with Subcategories (Non-clickable) -->
                                            <div class="flex items-center px-4 py-2 text-gray-300 cursor-default">
                                                <svg class="w-4 h-4 mr-3 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
                                                </svg>
                                                <span class="font-medium text-sm">{{ $category->name }}</span>
                                                <svg class="w-3 h-3 ml-auto text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        @else
                                            <!-- Main Category without Subcategories (Clickable) -->
                                            <a href="{{ route('categories.show', $category->slug ?: $category->id) }}" 
                                               class="flex items-center px-4 py-2 text-gray-300 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 border-l-2 border-transparent hover:border-blue-500 group">
                                                <svg class="w-4 h-4 mr-3 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
                                                </svg>
                                                <span class="font-medium text-sm">{{ $category->name }}</span>
                                            </a>
                                        @endif
                                        
                                        <!-- Subcategories -->
                                        @if($category->subcategories->count() > 0)
                                            <div class="ml-6 mt-1 space-y-1">
                                                @foreach($category->subcategories as $subcategory)
                                                    <a href="{{ route('categories.show', $subcategory->slug ?: $subcategory->id) }}" 
                                                       class="flex items-center px-4 py-1.5 text-gray-400 hover:bg-blue-500/10 hover:text-blue-400 transition-all duration-200 text-sm border-l-2 border-transparent hover:border-blue-500/50 group">
                                                            <svg class="w-3 h-3 mr-3 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                                            </svg>
                                                            <span>{{ $subcategory->name }}</span>
                                                    </a>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            
                            <!-- View All Categories -->
                            <div class="border-t border-blue-500/20 mt-3 pt-3">
                                <a href="{{ route('categories.index') }}" 
                                   class="flex items-center justify-center px-4 py-2 text-blue-400 hover:bg-blue-500/10 transition-all duration-200 font-medium text-sm rounded-lg">
                                    <span>View All Categories</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('promotions.index') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('promotions.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('promotions.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    Promotions
                </a>
                <a href="{{ route('orders.track') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('orders.track') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('orders.track') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                    Track Order
                </a>
                <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('services.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('services.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Service Center
                </a>
                <a href="{{ route('bank-details.index') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('bank-details.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('bank-details.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                    </svg>
                    Bank Details
                </a>
                <a href="{{ route('about-us.index') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('about-us.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('about-us.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    About Us
                </a>
                <a href="{{ route('contact-us.index') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('contact-us.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('contact-us.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Contact Us
                </a>
                <a href="{{ route('e-services.index') }}" class="text-gray-300 hover:text-blue-400 transition-all duration-200 text-sm font-semibold whitespace-nowrap px-4 py-2.5 rounded-lg hover:bg-blue-500/10 {{ request()->routeIs('e-services.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} group flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 {{ request()->routeIs('e-services.*') ? 'text-blue-400' : '' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                    </svg>
                    E-Services
                </a>
            </div>
        </div>
        

        <!-- Mobile Search Overlay -->
        <div class="md:hidden hidden fixed inset-0 bg-black/95 z-[9998]" id="mobile-search-overlay">
            <div class="flex items-start pt-4 px-4">
                <div class="flex-1">
                    <form action="{{ route('products.search') }}" method="GET" class="relative" id="mobile-search-form">
                        <input type="text" name="q" placeholder="Search computers, parts, accessories..." 
                               class="w-full bg-[#0a0a0a] border border-blue-500/30 text-white px-4 py-3 pl-12 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 placeholder-gray-500" 
                               value="{{ request('q') }}" 
                               id="mobile-search-input"
                               autocomplete="off">
                        <svg class="w-5 h-5 absolute left-4 top-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        
                        <!-- Mobile Search Suggestions -->
                        <div id="mobile-search-suggestions" class="absolute top-full left-0 right-0 bg-[#0a0a0a] border border-blue-500/30 rounded-lg shadow-xl shadow-blue-500/10 mt-1 hidden z-[9999] max-h-80 overflow-y-auto backdrop-blur-sm">
                            <!-- Suggestions will be populated here -->
                        </div>
                    </form>
                </div>
                <button class="ml-4 p-2 text-gray-300 hover:text-white" id="mobile-search-close">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
                </div>
                
        <!-- Mobile Menu -->
        <div class="md:hidden hidden mobile-menu" id="mobile-menu">
            <div class="px-4 pt-4 pb-3 space-y-4 bg-black border-t border-gray-800 max-h-[80vh] overflow-y-auto">
                
                <!-- Main Navigation Section -->
                <div class="space-y-3">
                    <h3 class="text-blue-400 font-semibold text-sm uppercase tracking-wider border-b border-blue-500/20 pb-2 flex items-center">
                        <span class="w-1 h-4 bg-gradient-to-b from-blue-500 to-blue-600 rounded-full mr-2"></span>
                        Main Menu
                    </h3>
                    <a href="{{ route('home') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-colors {{ request()->routeIs('home') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Home
                    </a>
                    
                    <a href="{{ route('promotions.index') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('promotions.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Promotions
                    </a>
                    
                    <a href="{{ route('orders.track') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-all duration-200 {{ request()->routeIs('orders.track') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                        Track Order
                    </a>
                </div>

                <!-- Categories Section -->
                <div class="space-y-3">
                    <h3 class="text-blue-400 font-semibold text-sm uppercase tracking-wider border-b border-blue-500/20 pb-2 flex items-center">
                        <span class="w-1 h-4 bg-gradient-to-b from-blue-500 to-blue-600 rounded-full mr-2"></span>
                        Categories
                    </h3>
                    
                    <!-- All Categories Link -->
                    <a href="{{ route('categories.index') }}" class="flex items-center py-3 text-blue-400 hover:bg-blue-500/10 transition-colors rounded-lg px-3 border border-blue-500/30 bg-blue-500/5">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <span class="font-medium">All Categories</span>
                    </a>

                    <!-- Main Categories with Subcategories -->
                    @foreach($menuCategories as $category)
                        <!-- Main Category -->
                        <div class="mb-1">
                            <div class="flex items-center">
                                @if($category->subcategories->count() > 0)
                                    <!-- Main Category with Subcategories (Non-clickable) -->
                                    <div class="flex-1 flex items-center py-2 px-3 text-gray-300 cursor-default rounded-lg">
                                        <svg class="w-4 h-4 mr-3 text-primary-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                                        </svg>
                                        <span class="font-medium text-sm">{{ $category->name }}</span>
                                    </div>
                                    <button class="p-2 text-gray-400 hover:text-white transition-colors mobile-category-toggle" data-category="{{ $category->id }}">
                                        <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </button>
                                @else
                                    <!-- Main Category without Subcategories (Clickable) -->
                                    <a href="{{ route('categories.show', $category->slug ?: $category->id) }}" 
                                       class="flex-1 flex items-center py-2 px-3 text-gray-300 hover:text-white hover:bg-gray-800 transition-colors rounded-lg group">
                                        <svg class="w-4 h-4 mr-3 text-primary-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                                        </svg>
                                        <span class="font-medium text-sm">{{ $category->name }}</span>
                                    </a>
                                @endif
                            </div>
                            
                            <!-- Subcategories (Collapsible) -->
                            @if($category->subcategories->count() > 0)
                                <div class="mobile-subcategories ml-6 mt-1 space-y-1 hidden" id="mobile-subcategories-{{ $category->id }}">
                                    @foreach($category->subcategories->take(10) as $subcategory)
                               <a href="{{ route('categories.show', $subcategory->slug ?: $subcategory->id) }}" 
                                  class="flex items-center px-3 py-1.5 text-gray-400 hover:text-primary-400 hover:bg-gray-800/50 transition-colors text-sm rounded group">
                                   <svg class="w-3 h-3 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                       <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                   </svg>
                                   <span>{{ $subcategory->name }}</span>
                                        </a>
                                    @endforeach
                                    @if($category->subcategories->count() > 10)
                                        <a href="{{ route('categories.show', $category->slug ?: $category->id) }}" 
                                           class="block px-3 py-1 text-xs text-primary-400 hover:text-primary-300 transition-colors">
                                            +{{ $category->subcategories->count() - 10 }} more subcategories
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                
                <!-- Services & Support -->
                <div class="space-y-3">
                    <h3 class="text-blue-400 font-semibold text-sm uppercase tracking-wider border-b border-blue-500/20 pb-2 flex items-center">
                        <span class="w-1 h-4 bg-gradient-to-b from-blue-500 to-blue-600 rounded-full mr-2"></span>
                        Services & Support
                    </h3>
                    <a href="{{ route('services.index') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-colors {{ request()->routeIs('services.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Service Center
                    </a>
                    
                    <a href="{{ route('bank-details.index') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-colors {{ request()->routeIs('bank-details.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                        Bank Details
                    </a>
                    
                    <a href="{{ route('about-us.index') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-colors {{ request()->routeIs('about-us.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        About Us
                    </a>
                    
                    <a href="{{ route('contact-us.index') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-colors {{ request()->routeIs('contact-us.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Us
                    </a>
                    
                    <a href="{{ route('e-services.index') }}" class="flex items-center py-3 text-gray-300 hover:text-blue-400 transition-colors {{ request()->routeIs('e-services.*') ? 'text-blue-400 bg-blue-500/15 border-l-2 border-blue-500' : '' }} rounded-lg px-3">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                        E-Services
                    </a>
                </div>
                
                <!-- Mobile Account & Cart -->
                <div class="border-t border-gray-800 pt-3 mt-3">
                    @auth
                        <!-- Logged In User Menu -->
                        <div class="space-y-2">
                            <div class="flex items-center py-2 text-gray-300 border-b border-gray-800 pb-2">
                                <img class="w-6 h-6 rounded-full mr-3" src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}">
                                <span class="font-medium">{{ Auth::user()->name }}</span>
                            </div>
                            <a href="{{ route('user.dashboard') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                </svg>
                                Dashboard
                            </a>
                            <a href="{{ route('user.orders') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                                My Orders
                            </a>
                            <a href="{{ route('profile.show') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Profile Settings
                            </a>
                            <a href="{{ route('orders.track') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                </svg>
                                Track Order
                            </a>
                            <a href="{{ route('user.settings') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Settings
                            </a>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="flex items-center py-2 text-gray-300 hover:text-red-400 transition-colors w-full text-left">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    @else
                        <!-- Guest User Menu -->
                        <div class="space-y-2">
                            <a href="{{ route('login') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                </svg>
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="flex items-center py-2 text-gray-300 hover:text-blue-500 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                Register
                            </a>
                        </div>
                    @endauth
                    
                    <a href="{{ route('cart.index') }}" class="flex items-center justify-between py-2.5 px-3 text-gray-300 hover:text-blue-400 mobile-cart-container rounded-lg hover:bg-blue-500/10 border border-transparent hover:border-blue-500/30 transition-all">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 mobile-cart-icon transition-transform duration-300 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"/>
                            </svg>
                            <span class="mobile-cart-text font-medium">Cart</span>
                        </div>
                        <span class="cart-total text-xs text-blue-400 font-semibold">LKR 0.00</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

         <!-- Main Content -->
     <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative bg-gradient-to-b from-[#0a0a0a] via-black to-black border-t border-blue-500/20 mt-16 overflow-hidden">
        <!-- Background Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-96 h-96 rounded-full bg-blue-500/5 blur-3xl -top-48 -left-48"></div>
            <div class="absolute w-96 h-96 rounded-full bg-blue-600/5 blur-3xl -bottom-48 -right-48"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:pt-16 pb-6 sm:pb-8">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10 xl:gap-12 mb-8 sm:mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="flex flex-col items-start sm:items-center lg:items-start space-y-4 mb-6">
                        <img src="{{ asset('laptop-expert.webp') }}" 
                             alt="Laptop Expert Logo" 
                             class="w-24 h-24 sm:w-28 sm:h-28 lg:w-32 lg:h-32 object-contain mx-auto sm:mx-0">
                        <div class="flex-1 w-full text-center sm:text-left">
                            <h3 class="text-xl sm:text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent mb-2">
                                LAPTOP EXPERT
                            </h3>
                            <p class="text-sm font-medium text-blue-400 mb-3">Your Trusted Laptop Solution Provider</p>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Brand new & used laptops, expert repair services, and comprehensive accessories in Sri Lanka.
                            </p>
                        </div>
                        </div>
                    
                    <!-- Social Media -->
                    <div class="mt-6">
                        <p class="text-gray-400 text-sm mb-3 font-medium">Follow Us</p>
                        <div class="flex space-x-3">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/laptopexpert" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="group flex items-center justify-center w-10 h-10 bg-gray-800/50 hover:bg-[#1877f2] rounded-lg transition-all duration-300 hover:scale-110 border border-gray-700/50 hover:border-[#1877f2]"
                               title="Follow us on Facebook">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/@laptopexpert" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="group flex items-center justify-center w-10 h-10 bg-gray-800/50 hover:bg-[#ff0000] rounded-lg transition-all duration-300 hover:scale-110 border border-gray-700/50 hover:border-[#ff0000]"
                               title="Subscribe to our YouTube channel">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                            <!-- TikTok -->
                            <a href="https://www.tiktok.com/@laptopexpert.lk" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="group flex items-center justify-center w-10 h-10 bg-gray-800/50 hover:bg-black rounded-lg transition-all duration-300 hover:scale-110 border border-gray-700/50 hover:border-white"
                               title="Follow us on TikTok">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                            </a>
                    </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-white mb-4 sm:mb-5 flex items-center">
                        <span class="w-1 h-4 sm:h-5 bg-gradient-to-b from-blue-500 to-blue-600 rounded-full mr-2 sm:mr-3"></span>
                        Quick Links
                    </h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                All Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('promotions.index') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Promotions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.track') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Track Order
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about-us.index') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us.index') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-white mb-4 sm:mb-5 flex items-center">
                        <span class="w-1 h-4 sm:h-5 bg-gradient-to-b from-blue-500 to-blue-600 rounded-full mr-2 sm:mr-3"></span>
                        Categories
                    </h4>
                    <ul class="space-y-2 sm:space-y-3">
                        @if(isset($menuCategories) && $menuCategories->count() > 0)
                            @foreach($menuCategories->take(6) as $category)
                                <li>
                                    <a href="{{ route('categories.show', $category->slug ?: $category->id) }}" 
                                       class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                        <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <a href="{{ route('categories.index') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm flex items-center group">
                                    <svg class="w-4 h-4 mr-2 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                    Browse All Categories
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-white mb-4 sm:mb-5 flex items-center">
                        <span class="w-1 h-4 sm:h-5 bg-gradient-to-b from-blue-500 to-blue-600 rounded-full mr-2 sm:mr-3"></span>
                        Contact Info
                    </h4>
                    <div class="space-y-3 sm:space-y-4">
                        <!-- Address -->
                        <div class="flex items-start space-x-3 group">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500/20 transition-colors">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            </div>
                            <div class="text-gray-400 text-sm leading-relaxed">
                                <div class="font-medium text-gray-300 mb-1">Address</div>
                                <div>296/3/C, Delpe Junction,</div>
                                <div>Ragama, Sri Lanka</div>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex items-start space-x-3 group">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500/20 transition-colors">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            </div>
                            <div class="text-gray-400 text-sm">
                                <div class="font-medium text-gray-300 mb-1">Phone</div>
                                <a href="tel:0764442221" class="hover:text-blue-400 transition-colors">076 444 222 1</a>
                                <div class="mt-1">
                                    <a href="tel:0112960660" class="hover:text-blue-400 transition-colors">011 296 066 0</a>
                                </div>
                                <div class="mt-2">
                                    <div class="font-medium text-gray-300 mb-1">WhatsApp</div>
                                    <a href="https://wa.me/94764442221" target="_blank" class="hover:text-blue-400 transition-colors">0764442221</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start space-x-3 group">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500/20 transition-colors">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 002 2v10a2 2 0 002 2z"/>
                            </svg>
                            </div>
                            <div class="text-gray-400 text-sm">
                                <div class="font-medium text-gray-300 mb-1">Email</div>
                                <a href="mailto:info@laptopexpert.lk" class="hover:text-blue-400 transition-colors break-all">info@laptopexpert.lk</a>
                            </div>
                        </div>
                        
                        <!-- Hours -->
                        <div class="flex items-start space-x-3 group">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-blue-500/20 transition-colors">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            </div>
                            <div class="text-gray-400 text-sm">
                                <div class="font-medium text-gray-300 mb-1">Business Hours</div>
                                <div>Mon-Fri: <span class="text-blue-400">9:00 AM - 6:30 PM</span></div>
                                <div>Sat-Sun: <span class="text-blue-400">9:00 AM - 5:30 PM</span></div>
                                <div class="text-xs text-gray-500 mt-1">Closed on Poya Days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods Section -->
            <div class="border-t border-blue-500/20 pt-6 sm:pt-8 mb-6 sm:mb-8">
                <div class="text-center mb-4 sm:mb-6">
                    <h4 class="text-lg sm:text-xl font-bold text-white mb-2 flex items-center justify-center">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        We Accept
                    </h4>
                    <p class="text-gray-400 text-xs sm:text-sm">Secure payment methods available</p>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-3 sm:gap-4 md:gap-6">
                        {{-- TEMPORARILY HIDDEN: KokoPay --}}
                        {{-- <div class="group">
                        <div class="flex items-center bg-gradient-to-r from-[#ec4899]/10 to-[#f97316]/10 border border-[#ec4899]/20 rounded-xl px-5 py-4 hover:from-[#ec4899]/20 hover:to-[#f97316]/20 hover:border-[#ec4899]/40 transition-all duration-300 hover:scale-105">
                                <img src="{{ asset('images/kokopay-logo.png') }}" 
                                     alt="KokoPay - Buy Now Pay Later" 
                                 class="w-12 h-12 mr-3 object-contain">
                                <div class="text-left">
                                <div class="text-sm font-bold text-[#ec4899]">KokoPay</div>
                                    <div class="text-xs text-gray-400">Buy Now Pay Later</div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- TEMPORARILY HIDDEN: WebXPay / Credit Cards --}}
                        {{-- <div class="group">
                        <div class="flex items-center bg-gradient-to-r from-blue-500/10 to-blue-600/10 border border-blue-500/20 rounded-xl px-5 py-4 hover:from-blue-500/20 hover:to-blue-600/20 hover:border-blue-500/40 transition-all duration-300 hover:scale-105">
                            <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-3 shadow-sm">
                                    <img src="{{ asset('images/webxpay-logo.webp') }}" 
                                         alt="Credit/Debit Cards" 
                                     class="w-10 h-10 object-contain">
                                </div>
                                <div class="text-left">
                                <div class="text-sm font-bold text-blue-400">Credit/Debit Cards</div>
                                    <div class="text-xs text-gray-400">Visa, MasterCard, Amex</div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Bank Transfer -->
                    <div class="group">
                        <div class="flex items-center bg-gradient-to-r from-green-500/10 to-green-600/10 border border-green-500/20 rounded-xl px-5 py-4 hover:from-green-500/20 hover:to-green-600/20 hover:border-green-500/40 transition-all duration-300 hover:scale-105">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3 shadow-sm">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M2 8V4.5C2 3.67 2.67 3 3.5 3H20.5C21.33 3 22 3.67 22 4.5V8H2ZM22 10V19.5C22 20.33 21.33 21 20.5 21H3.5C2.67 21 2 20.33 2 19.5V10H22ZM4 18H6V16H4V18ZM8 18H10V16H8V18Z"/>
                                    </svg>
                                </div>
                                <div class="text-left">
                                <div class="text-sm font-bold text-green-400">Bank Transfer</div>
                                    <div class="text-xs text-gray-400">Direct Bank Deposit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Security Notice -->
                    <div class="mt-6 text-center">
                    <div class="inline-flex items-center px-4 py-2 bg-green-500/10 border border-green-500/20 rounded-lg">
                        <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.7C16,17.4 15.4,18 14.8,18H9.2C8.6,18 8,17.4 8,16.8V12.8C8,12.1 8.6,11.5 9.2,11.5V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/>
                            </svg>
                        <p class="text-gray-400 text-xs">Your payment information is processed securely. We do not store credit card details.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-blue-500/20 pt-8">
                <div class="flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">
                    <!-- Copyright -->
                    <div class="text-center lg:text-left">
                        <p class="text-gray-400 text-sm">
                            © {{ date('Y') }} <span class="text-blue-400 font-semibold">LAPTOP EXPERT</span>. All rights reserved.
                        </p>
                    </div>
                        
                    <!-- Legal Links -->
                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="{{ route('privacy-policy') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors flex items-center group">
                            <svg class="w-3 h-3 mr-1 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                            Privacy Policy
                                </a>
                        <a href="{{ route('terms-of-service') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors flex items-center group">
                            <svg class="w-3 h-3 mr-1 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                            Terms of Service
                        </a>
                        <a href="{{ route('warranty') }}" class="text-gray-400 hover:text-blue-400 text-sm transition-colors flex items-center group">
                            <svg class="w-3 h-3 mr-1 text-blue-500/50 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                            Warranty
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-gradient-to-br from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white p-3 rounded-full shadow-lg hover:shadow-xl hover:shadow-blue-500/50 transition-all duration-300 opacity-0 invisible z-50 group border border-blue-400/30">
        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    @stack('scripts')
    
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Mobile search toggle
        document.getElementById('mobile-search-toggle').addEventListener('click', function() {
            const mobileSearchOverlay = document.getElementById('mobile-search-overlay');
            mobileSearchOverlay.classList.remove('hidden');
            document.getElementById('mobile-search-input').focus();
        });

        // Mobile search close
        document.getElementById('mobile-search-close').addEventListener('click', function() {
            const mobileSearchOverlay = document.getElementById('mobile-search-overlay');
            mobileSearchOverlay.classList.add('hidden');
        });

        // Mobile category toggle functionality in hamburger menu
        document.addEventListener('click', function(e) {
            if (e.target.closest('.mobile-category-toggle')) {
                const button = e.target.closest('.mobile-category-toggle');
                const categoryId = button.getAttribute('data-category');
                const subcategoriesDiv = document.getElementById('mobile-subcategories-' + categoryId);
                const arrow = button.querySelector('svg');
                
                if (subcategoriesDiv.classList.contains('hidden')) {
                    // Show subcategories
                    subcategoriesDiv.classList.remove('hidden');
                    arrow.classList.add('rotate-180');
                } else {
                    // Hide subcategories
                    subcategoriesDiv.classList.add('hidden');
                    arrow.classList.remove('rotate-180');
                }
            }
        });

        // Cart total display function (simplified, no count)
        function updateCartTotal(cartTotal = null) {
            try {
                if (cartTotal !== null) {
                    localStorage.setItem('cartTotal', cartTotal);
                } else {
                    cartTotal = localStorage.getItem('cartTotal') || '0.00';
                }
                
                // Update cart total display (but not on cart page itself)
                if (!window.location.pathname.includes('/cart')) {
                    const cartTotalElements = document.querySelectorAll('.cart-total');
                    cartTotalElements.forEach(element => {
                        if (element) {
                            element.textContent = `LKR ${cartTotal}`;
                        }
                    });
                }
            } catch (error) {
                console.error('Error updating cart total:', error);
            }
        }
        
        
        function animateCartIcon() {
            // Subtle professional cart feedback - no shaking or bouncing
            const cartIcons = document.querySelectorAll('.cart-icon, .mobile-cart-icon, .cart-icon-mobile');
            cartIcons.forEach(icon => {
                icon.style.transform = 'scale(1.05)';
                icon.style.transition = 'transform 0.2s ease';
                setTimeout(() => {
                    icon.style.transform = 'scale(1)';
                }, 300);
            });
        }
        
        function showCartPulse() {
            // Subtle professional pulse - no excessive animation
            const pulseElements = document.querySelectorAll('.cart-pulse');
            pulseElements.forEach(pulse => {
                pulse.style.opacity = '0.8';
                pulse.style.transition = 'opacity 0.3s ease';
                setTimeout(() => {
                    pulse.style.opacity = '0';
                }, 800);
            });
        }
        
        function showCartSuccessNotification(message = 'Item added to cart!') {
            // Remove any existing notifications
            const existingNotifications = document.querySelectorAll('.cart-notification');
            existingNotifications.forEach(n => n.remove());
            
            // Create floating cart notification
            const notification = document.createElement('div');
            notification.className = 'cart-notification fixed z-[99999] bg-gradient-to-r from-green-500 to-emerald-600 text-white px-4 py-3 rounded-xl shadow-2xl transition-all duration-500 flex items-center space-x-3 border border-green-400/20';
            
            // Always position notification in top-right, within viewport
            notification.style.top = '20px';
            notification.style.right = '20px';
            notification.style.maxWidth = '320px';
            notification.style.width = 'auto';
            notification.style.transform = 'translateX(100%)'; // Start off-screen to the right
            
            // For mobile screens, adjust positioning
            if (window.innerWidth < 640) {
                notification.style.right = '10px';
                notification.style.left = '10px';
                notification.style.maxWidth = 'none';
                notification.style.width = 'auto';
                notification.style.transform = 'translateY(-100%)'; // Start off-screen above
            }
            
            notification.innerHTML = `
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center animate-bounce">
                        <svg class="w-5 h-5 text-green-800" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-semibold text-sm">${message}</p>
                    <p class="text-green-100 text-xs mt-1">View cart to proceed to checkout</p>
                </div>
                <button onclick="this.parentElement.remove()" class="flex-shrink-0 text-green-200 hover:text-white transition-colors ml-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            `;
            
            document.body.appendChild(notification);
            
            // Trigger slide-in animation
            setTimeout(() => {
                if (window.innerWidth < 640) {
                    notification.style.transform = 'translateY(0)'; // Slide down on mobile
                } else {
                    notification.style.transform = 'translateX(0)'; // Slide in from right on desktop
                }
            }, 100);
            
            // Auto remove after 4 seconds
            setTimeout(() => {
                if (window.innerWidth < 640) {
                    notification.style.transform = 'translateY(-100%)'; // Slide up on mobile
                } else {
                    notification.style.transform = 'translateX(100%)'; // Slide out to right on desktop
                }
                notification.style.opacity = '0';
                
                setTimeout(() => {
                    if (notification.parentNode) {
                        document.body.removeChild(notification);
                    }
                }, 500);
            }, 4000);
        }
        
        // Global function to handle cart animations (simplified, no count)
        window.animateCartAddition = function(cartTotal = null, productName = 'Item') {
            try {
                // Update cart total only
                if (cartTotal) {
                    updateCartTotal(cartTotal);
                }
                
                // Animate cart icon
                animateCartIcon();
                
                // Show pulse effect
                showCartPulse();
                
                // Show success notification
                showCartSuccessNotification(`${productName} added to cart!`);
                
                // Add temporary professional glow effect to cart container
                const cartContainers = document.querySelectorAll('.cart-container, .mobile-cart-container, .cart-container-mobile');
                cartContainers.forEach(container => {
                    container.style.filter = 'drop-shadow(0 0 8px rgba(245, 158, 11, 0.4))';
                    container.style.transform = 'scale(1.02)';
                    container.style.transition = 'all 0.3s ease';
                    setTimeout(() => {
                        container.style.filter = 'none';
                        container.style.transform = 'scale(1)';
                    }, 600);
                });
            } catch (error) {
                console.error('Cart animation error:', error);
            }
        }
        
        // Initialize cart total on page load (no count needed)
        document.addEventListener('DOMContentLoaded', function() {
            // Load cart total from server instead of localStorage for accuracy
            loadCartTotalFromServer();
        });
        
        // Refresh cart total when page becomes visible (handles tab switching)
        document.addEventListener('visibilitychange', function() {
            if (!document.hidden) {
                // Page became visible, refresh cart total from server
                loadCartTotalFromServer();
            }
        });
        
        // Refresh cart total when user returns to the page
        window.addEventListener('focus', function() {
            loadCartTotalFromServer();
        });
        
        // Function to load cart total from server
        function loadCartTotalFromServer() {
            fetch('/cart/summary', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const total = data.total.toFixed(2);
                    updateCartTotal(total);
                    // Update localStorage for faster subsequent loads
                    localStorage.setItem('cartTotal', total);
                } else {
                    // Fallback to localStorage if server request fails
                    const savedTotal = localStorage.getItem('cartTotal') || '0.00';
                    updateCartTotal(savedTotal);
                }
            })
            .catch(error => {
                console.log('Cart total fetch failed, using localStorage fallback');
                // Fallback to localStorage if server request fails
                const savedTotal = localStorage.getItem('cartTotal') || '0.00';
                updateCartTotal(savedTotal);
            });
        }
        
        // Global function to refresh cart total (useful for debugging and manual refresh)
        window.refreshCartTotal = function() {
            console.log('🔄 Manually refreshing cart total from server...');
            loadCartTotalFromServer();
        };
        
        // Global fallback addToCart function for AJAX compatibility
        window.addToCart = function(productId) {
            // Check if we have a category-specific function
            if (typeof window.addToCartFromCategory === 'function') {
                return window.addToCartFromCategory(productId);
            }
            
            // Check if we have a search-specific function
            if (typeof window.addToCartFromSearch === 'function') {
                return window.addToCartFromSearch(productId);
            }
            
            // Check if we have a home-specific function
            if (typeof window.addToCartFromHome === 'function') {
                return window.addToCartFromHome(productId);
            }
            
            // Fallback: Generic add to cart with professional feedback
            const button = event.target;
            const originalText = button.textContent;
            
            button.disabled = true;
            button.textContent = 'Adding...';

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: 1
                })
            })
            .then(response => response.json())
            .then(data => {
                button.disabled = false;
                
                if (data.success) {
                    // Professional success feedback
                    button.classList.add('bg-gray-700', 'border-primary-500');
                    button.textContent = 'Added to Cart';
                    setTimeout(() => {
                        button.classList.remove('bg-gray-700', 'border-primary-500');
                        button.textContent = originalText;
                    }, 1200);
                    
                    window.animateCartAddition(data.cart_total, 'Product');
                } else {
                    button.textContent = originalText;
                    alert(data.message || 'Failed to add product to cart');
                }
            })
            .catch(error => {
                button.disabled = false;
                button.textContent = originalText;
                console.error('Error:', error);
                alert('Something went wrong. Please try again.');
            });
        };
        

        // Search Suggestions Functionality
        let searchTimeout;
        
        function initSearchSuggestions(inputId, suggestionsId, isMobile = false) {
            const searchInput = document.getElementById(inputId);
            const suggestionsDiv = document.getElementById(suggestionsId);
            
            if (!searchInput || !suggestionsDiv) return;
            
            searchInput.addEventListener('input', function() {
                const query = this.value.trim();
                
                clearTimeout(searchTimeout);
                
                if (query.length < 3) { // Increased minimum characters
                    suggestionsDiv.classList.add('hidden');
                    return;
                }
                
                searchTimeout = setTimeout(() => {
                    // Only log in development
                    // console.log('Fetching suggestions for:', query);
                    
                    fetch(`/api/search/suggestions?q=${encodeURIComponent(query)}`)
                        .then(response => {
                            // console.log('Search API response status:', response.status);
                            return response.json();
                        })
                        .then(data => {
                            // console.log('Search suggestions data:', data);
                            displaySuggestions(data, suggestionsDiv, isMobile);
                        })
                        .catch(error => {
                            console.error('Search suggestions error:', error);
                            suggestionsDiv.innerHTML = '<div class="p-4 text-red-400 text-center">Search error occurred</div>';
                            suggestionsDiv.classList.remove('hidden');
                        });
                }, 500); // Increased debounce time from 300ms to 500ms
            });
            
            // Hide suggestions when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !suggestionsDiv.contains(e.target)) {
                    suggestionsDiv.classList.add('hidden');
                }
            });
            
            // Show suggestions when focusing input (if there's content)
            searchInput.addEventListener('focus', function() {
                if (this.value.trim().length >= 2) {
                    suggestionsDiv.classList.remove('hidden');
                }
            });
        }
        
        function displaySuggestions(data, suggestionsDiv, isMobile) {
            console.log('Displaying suggestions:', data, 'in container:', suggestionsDiv);
            let html = '';
            
            // Add categories
            if (data.categories && data.categories.length > 0) {
                html += '<div class="p-3 border-b border-gray-800"><div class="text-xs font-semibold text-primary-400 mb-2">CATEGORIES</div>';
                data.categories.forEach(category => {
                    html += `<a href="/categories/${category.slug}" class="block py-2 px-3 text-gray-300 hover:bg-gray-900 hover:text-primary-400 transition-colors rounded">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-3 text-primary-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
                            </svg>
                            <span>${category.name}</span>
                        </div>
                    </a>`;
                });
                html += '</div>';
            }
            
            // Add products
            if (data.products && data.products.length > 0) {
                html += '<div class="p-3"><div class="text-xs font-semibold text-primary-400 mb-2">PRODUCTS</div>';
                data.products.forEach(product => {
                    // Generate proper product URL using category and product slugs
                    const categorySlug = product.category?.slug || product.category?.id || 'uncategorized';
                    const productSlug = product.slug || product.id;
                    const productUrl = `/${categorySlug}/${productSlug}`;
                    
                    // Check if product has promotion/sale price
                    const hasPromotion = product.is_on_sale && product.final_price && parseFloat(product.final_price) < parseFloat(product.price);
                    const originalPrice = parseFloat(product.price);
                    const finalPrice = product.final_price ? parseFloat(product.final_price) : originalPrice;
                    
                    let priceHtml = '';
                    if (hasPromotion) {
                        priceHtml = `
                            <div class="flex items-center space-x-2">
                                <span class="text-xs text-primary-400 font-semibold">LKR ${finalPrice.toLocaleString()}</span>
                                <span class="text-xs text-gray-500 line-through">LKR ${originalPrice.toLocaleString()}</span>
                                <span class="text-xs bg-red-500 text-white px-1 py-0.5 rounded">SALE</span>
                            </div>
                        `;
                    } else {
                        priceHtml = `<div class="text-xs text-primary-400">LKR ${finalPrice.toLocaleString()}</div>`;
                    }
                    
                    html += `<a href="${productUrl}" class="block py-2 px-3 text-gray-300 hover:bg-gray-900 hover:text-primary-400 transition-colors rounded">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="font-medium">${product.name}</div>
                                ${priceHtml}
                            </div>
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </a>`;
                });
                html += '</div>';
            }
            
            if (html) {
                suggestionsDiv.innerHTML = html;
                suggestionsDiv.classList.remove('hidden');
            } else {
                suggestionsDiv.innerHTML = '<div class="p-4 text-gray-400 text-center">No results found</div>';
                suggestionsDiv.classList.remove('hidden');
            }
        }
        
        // Initialize search suggestions for both desktop and mobile
        document.addEventListener('DOMContentLoaded', function() {
            initSearchSuggestions('search-input', 'search-suggestions', false);
            initSearchSuggestions('mobile-search-input', 'mobile-search-suggestions', true);
        });

        // Cart count feature removed - no initialization needed
        
        // Categories Dropdown Functionality
        const categoriesDropdownTrigger = document.getElementById('categories-dropdown-trigger');
        const categoriesDropdownMenu = document.getElementById('categories-dropdown-menu');
        const categoriesDropdownArrow = document.getElementById('categories-dropdown-arrow');
        
        if (categoriesDropdownTrigger && categoriesDropdownMenu) {
            // Toggle dropdown on click (for mobile and touch devices)
            categoriesDropdownTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                const isVisible = !categoriesDropdownMenu.classList.contains('opacity-0');
                
                if (isVisible) {
                    // Hide dropdown
                    categoriesDropdownMenu.classList.add('opacity-0', 'invisible');
                    categoriesDropdownMenu.classList.remove('opacity-100', 'visible');
                    categoriesDropdownArrow.style.transform = 'rotate(0deg)';
                } else {
                    // Show dropdown
                    categoriesDropdownMenu.classList.remove('opacity-0', 'invisible');
                    categoriesDropdownMenu.classList.add('opacity-100', 'visible');
                    categoriesDropdownArrow.style.transform = 'rotate(180deg)';
                }
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!categoriesDropdownTrigger.contains(e.target) && !categoriesDropdownMenu.contains(e.target)) {
                    categoriesDropdownMenu.classList.add('opacity-0', 'invisible');
                    categoriesDropdownMenu.classList.remove('opacity-100', 'visible');
                    categoriesDropdownArrow.style.transform = 'rotate(0deg)';
                }
            });
            
            // Handle mobile touch events
            categoriesDropdownTrigger.addEventListener('touchstart', function(e) {
                e.preventDefault();
                categoriesDropdownTrigger.click();
            }, { passive: false });
        }

        // Back to Top Button Functionality
        const backToTopButton = document.getElementById('back-to-top');
        
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
            }
        });
        
        // Smooth scroll to top when clicked
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>

