@extends('layouts.app')

@section('title', 'LAPTOP EXPERT - Brand New & Used Laptops, Repair & Service, Accessories in Sri Lanka')
@section('description', 'Laptop Expert - Your trusted destination for brand new and used laptops, professional laptop repair services, and all laptop accessories in Sri Lanka. Expert technicians, quality products, and affordable prices.')
@section('keywords', 'laptops Sri Lanka, brand new laptops, used laptops, laptop repair Sri Lanka, laptop service, laptop accessories, laptop parts, laptop screen repair, laptop battery, laptop charger, laptop keyboard, laptop bag, laptop cooling pad, Laptop Expert, Colombo')
@section('og_title', 'LAPTOP EXPERT - Brand New & Used Laptops, Repair & Service in Sri Lanka')
@section('og_description', 'Discover brand new and used laptops, expert laptop repair services, and comprehensive laptop accessories at Laptop Expert. Quality products with warranty and expert service in Sri Lanka.')
@section('og_type', 'website')

@section('content')
<!-- Hero Slider Section -->
<section class="relative overflow-hidden w-full">
    <div class="hero-slider relative z-10 h-[400px] sm:h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden w-full" id="heroSlider">
        <!-- Image Slide 1 -->
        <div class="hero-slide active overflow-hidden relative">
            <img src="{{ asset('images/sliders/slider1 (1).jpg') }}" 
                 alt="Laptop Expert Slider 1" 
                 class="hero-slide-image">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent flex items-center">
                <div class="px-6 sm:px-8 md:px-12 lg:px-16 py-8 max-w-2xl">
                    <div class="inline-flex items-center px-3 py-1.5 bg-blue-500/20 border border-blue-500/40 rounded-lg text-blue-300 text-xs font-medium mb-4 backdrop-blur-sm">
                        Premium Technology
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        Latest Laptop <span class="text-blue-400">Collections</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-5 md:mb-6 leading-relaxed">
                        Discover cutting-edge laptops with the latest processors, stunning displays, and powerful performance for work and play.
                    </p>
                    <a href="/categories/brand-new-laptop" class="inline-flex items-center px-5 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        Shop Now
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Slide 2 -->
        <div class="hero-slide overflow-hidden relative">
            <img src="{{ asset('images/sliders/slider1 (2).jpg') }}" 
                 alt="Laptop Expert Slider 2" 
                 class="hero-slide-image">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/60 to-transparent flex items-center justify-end">
                <div class="px-6 sm:px-8 md:px-12 lg:px-16 py-8 max-w-2xl text-right">
                    <div class="inline-flex items-center px-3 py-1.5 bg-green-500/20 border border-green-500/40 rounded-lg text-green-300 text-xs font-medium mb-4 backdrop-blur-sm">
                        Expert Repairs
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        Professional <span class="text-green-400">Repair Services</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-5 md:mb-6 leading-relaxed">
                        Trust our certified technicians for fast, reliable laptop repairs. Screen replacement, motherboard fixes, and more.
                    </p>
                    <a href="/services" class="inline-flex items-center px-5 py-2.5 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        Get Service
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Slide 3 -->
        <div class="hero-slide overflow-hidden relative">
            <img src="{{ asset('images/sliders/slider1 (3).jpg') }}" 
                 alt="Laptop Expert Slider 3" 
                 class="hero-slide-image">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent flex items-center">
                <div class="px-6 sm:px-8 md:px-12 lg:px-16 py-8 max-w-2xl">
                    <div class="inline-flex items-center px-3 py-1.5 bg-purple-500/20 border border-purple-500/40 rounded-lg text-purple-300 text-xs font-medium mb-4 backdrop-blur-sm">
                        Value Deals
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        Quality <span class="text-purple-400">Used Laptops</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-5 md:mb-6 leading-relaxed">
                        Pre-owned laptops tested and certified. Great performance at unbeatable prices with warranty options available.
                    </p>
                    <a href="/categories/used-laptop" class="inline-flex items-center px-5 py-2.5 bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        Browse Used
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Slide 4 -->
        <div class="hero-slide overflow-hidden relative">
            <img src="{{ asset('images/sliders/slider1 (4).jpg') }}" 
                 alt="Laptop Expert Slider 4" 
                 class="hero-slide-image">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/60 to-transparent flex items-center justify-end">
                <div class="px-6 sm:px-8 md:px-12 lg:px-16 py-8 max-w-2xl text-right">
                    <div class="inline-flex items-center px-3 py-1.5 bg-yellow-500/20 border border-yellow-500/40 rounded-lg text-yellow-300 text-xs font-medium mb-4 backdrop-blur-sm">
                        Complete Solutions
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        All Laptop <span class="text-yellow-400">Accessories</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-5 md:mb-6 leading-relaxed">
                        Everything you need in one place. Bags, chargers, batteries, keyboards, mice, and more laptop essentials.
                    </p>
                    <a href="/categories" class="inline-flex items-center px-5 py-2.5 bg-yellow-500 hover:bg-yellow-600 text-black font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        Shop Accessories
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Slide 5 -->
        <div class="hero-slide overflow-hidden relative">
            <img src="{{ asset('images/sliders/slider1 (5).jpg') }}" 
                 alt="Laptop Expert Slider 5" 
                 class="hero-slide-image">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent flex items-center">
                <div class="px-6 sm:px-8 md:px-12 lg:px-16 py-8 max-w-2xl">
                    <div class="inline-flex items-center px-3 py-1.5 bg-blue-500/20 border border-blue-500/40 rounded-lg text-blue-300 text-xs font-medium mb-4 backdrop-blur-sm">
                        Trusted Service
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        Island-wide <span class="text-blue-400">Delivery</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-5 md:mb-6 leading-relaxed">
                        Fast and secure delivery across Sri Lanka. Get your orders delivered safely to your doorstep with tracking.
                    </p>
                    <a href="/about-us" class="inline-flex items-center px-5 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        Learn More
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Slide 6 -->
        <div class="hero-slide overflow-hidden relative">
            <img src="{{ asset('images/sliders/slider1 (6).jpg') }}" 
                 alt="Laptop Expert Slider 6" 
                 class="hero-slide-image">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/60 to-transparent flex items-center justify-end">
                <div class="px-6 sm:px-8 md:px-12 lg:px-16 py-8 max-w-2xl text-right">
                    <div class="inline-flex items-center px-3 py-1.5 bg-red-500/20 border border-red-500/40 rounded-lg text-red-300 text-xs font-medium mb-4 backdrop-blur-sm">
                        Expert Support
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 leading-tight">
                        Warranty & <span class="text-red-400">After-Sales</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-5 md:mb-6 leading-relaxed">
                        Comprehensive warranty coverage and dedicated customer support. Your satisfaction is our priority.
                    </p>
                    <a href="/contact-us" class="inline-flex items-center px-5 py-2.5 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        Contact Us
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Slider Navigation Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20">
            <div class="flex space-x-2">
                <button class="slider-dot active w-3 h-3 rounded-full bg-white/80 hover:bg-white transition-all duration-300" data-slide="0"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" data-slide="1"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" data-slide="2"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" data-slide="3"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" data-slide="4"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/80 transition-all duration-300" data-slide="5"></button>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition-all duration-300 group" id="prevSlide">
            <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition-all duration-300 group" id="nextSlide">
            <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </div>
</section>

<!-- Our Services & Solutions Section -->
<section class="py-12 md:py-20 bg-gradient-to-b from-black via-[#0a0a0a] to-black relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute w-96 h-96 rounded-full bg-blue-500/5 blur-3xl -top-48 -left-48"></div>
        <div class="absolute w-96 h-96 rounded-full bg-blue-600/5 blur-3xl -bottom-48 -right-48"></div>
        </div>
        
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-lg text-blue-400 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8Z"/>
                    </svg>
                Comprehensive Solutions
                </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">
                Your Complete Laptop <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">Solution Provider</span>
            </h2>
            <p class="text-base md:text-lg text-gray-400 max-w-3xl mx-auto">
                From brand new and used laptops to expert repair services and comprehensive accessories - we've got everything you need
            </p>
        </div>

        <!-- Main Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
            <!-- Brand New Laptops -->
            <div class="group relative bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] border border-gray-800/50 rounded-xl p-6 md:p-8 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4,6H20V16H4M20,18A2,2 0 0,0 22,16V6C22,4.89 21.1,4 20,4H4C2.89,4 2,4.89 2,6V16A2,2 0 0,0 4,18H1V20H23V18H20Z"/>
                    </svg>
                </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Brand New Laptops</h3>
                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Latest models from top brands with full warranty. Gaming laptops, professional workstations, and budget-friendly options.
                    </p>
                    <a href="/categories/brand-new-laptop" class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium group-hover:translate-x-2 transition-transform duration-300">
                        Browse Collection
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
            </a>
                </div>
            </div>

            <!-- Used Laptops -->
            <div class="group relative bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] border border-gray-800/50 rounded-xl p-6 md:p-8 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V19H5V5H19Z"/>
                    </svg>
                </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Quality Used Laptops</h3>
                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Carefully tested and certified pre-owned laptops. Great performance at affordable prices with warranty options.
                    </p>
                    <a href="/categories/used-laptop" class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium group-hover:translate-x-2 transition-transform duration-300">
                        View Selection
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
            </a>
                </div>
            </div>

            <!-- Repair Services -->
            <div class="group relative bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] border border-gray-800/50 rounded-xl p-6 md:p-8 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-700 to-blue-800 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.7,19L13.6,9.9C14.5,7.6 14,4.9 12.1,3C10.1,1 7.1,0.6 4.7,1.7L9,6L6,9L1.6,4.7C0.4,7.1 0.9,10.1 2.9,12.1C4.8,14 7.5,14.5 9.8,13.6L18.9,22.7C19.3,23.1 19.9,23.1 20.3,22.7L22.6,20.4C23.1,20 23.1,19.3 22.7,19Z"/>
                    </svg>
                </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Expert Repair Services</h3>
                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Professional laptop repair for all brands. Screen replacement, motherboard repair, battery services, and more.
                    </p>
                    <a href="/services" class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium group-hover:translate-x-2 transition-transform duration-300">
                        Learn More
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
            </a>
        </div>
                </div>
        
            <!-- Laptop Accessories -->
            <div class="group relative bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] border border-gray-800/50 rounded-xl p-6 md:p-8 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8Z"/>
                    </svg>
                </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Complete Accessories</h3>
                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Everything you need: bags, chargers, batteries, keyboards, mice, cooling pads, and more laptop essentials.
                    </p>
                    <a href="/categories" class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium group-hover:translate-x-2 transition-transform duration-300">
                        Shop Accessories
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    </a>
                </div>
        </div>

            <!-- Warranty & Support -->
            <div class="group relative bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] border border-gray-800/50 rounded-xl p-6 md:p-8 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.7C16,17.4 15.4,18 14.8,18H9.2C8.6,18 8,17.4 8,16.8V12.8C8,12.1 8.6,11.5 9.2,11.5V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/>
                </svg>
            </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Warranty & Support</h3>
                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Comprehensive warranty on all products. Dedicated customer support and after-sales service you can trust.
                    </p>
                    <a href="/about-us" class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium group-hover:translate-x-2 transition-transform duration-300">
                        Know More
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
            </a>
                                </div>
                            </div>

            <!-- Island-wide Delivery -->
            <div class="group relative bg-gradient-to-br from-[#0a0a0a] to-[#1a1a1a] border border-gray-800/50 rounded-xl p-6 md:p-8 hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-700 to-blue-800 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.46,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z"/>
                    </svg>
                                </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Island-wide Delivery</h3>
                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Fast and reliable delivery service across Sri Lanka. Get your orders delivered safely to your doorstep.
                    </p>
                    <a href="/about-us" class="inline-flex items-center text-blue-400 hover:text-blue-500 font-medium group-hover:translate-x-2 transition-transform duration-300">
                        Check Delivery
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
            </a>
                                </div>
                            </div>
                                </div>

        <!-- Call to Action Banner -->
        <div class="relative bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 rounded-2xl p-8 md:p-12 overflow-hidden">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full -ml-32 -mb-32"></div>
            
            <div class="relative z-10 text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Need Help Choosing the Right Laptop?
                </h3>
                <p class="text-blue-100 mb-6 max-w-2xl mx-auto text-lg">
                    Our expert team is here to help you find the perfect laptop for your needs. Get personalized recommendations and expert advice.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact-us" class="inline-flex items-center justify-center px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-300 hover:scale-105">
                                            Contact Us
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                    </a>
                    <a href="/categories" class="inline-flex items-center justify-center px-6 py-3 bg-blue-500/20 backdrop-blur-sm border border-white/30 text-white font-semibold rounded-lg hover:bg-blue-500/30 transition-all duration-300 hover:scale-105">
                        Browse All Products
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
            </a>
                            </div>
                        </div>
        </div>
    </div>
</section>

{{-- TEMPORARILY HIDDEN: Happy Customer Photos Section --}}
{{-- <section class="py-16 bg-gradient-to-b from-[#0f0f0f] to-black relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute w-64 h-64 rounded-full bg-blue-500/30 blur-3xl -top-32 -left-32"></div>
        <div class="absolute w-64 h-64 rounded-full bg-[#3b82f6] blur-3xl -bottom-32 -right-32"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-lg text-blue-500 text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 7V9C15 10.1 15.9 11 17 11S19 10.1 19 11V9H21ZM17 13C15.9 13 15 12.1 15 11V9L12 9L9 9V11C9 12.1 8.1 13 7 13S5 12.1 5 11V9H3V11C3 12.1 3.9 13 5 13S7 12.1 7 13V21H9V13C9 12.1 9.9 11 11 11S13 12.1 13 11V21H15V13C15 12.1 15.9 11 17 11S19 12.1 19 11V9H21V11C21 12.1 20.1 13 19 13S17 12.1 17 13Z"/>
                </svg>
                Our Happy Customers
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Customer Experiences
            </h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Join thousands of satisfied customers who trust Laptop Expert for their technology needs
            </p>
        </div>

        <!-- Happy Customer Photos - Continuous One Line Carousel -->
        <div class="relative overflow-hidden">
            <!-- Carousel Container -->
            <div class="customer-carousel-container" id="customerCarousel">
                <!-- Continuous Scrolling Track -->
                <div class="carousel-track-continuous flex animate-scroll-right" id="carouselTrackContinuous">
                    <!-- First Set of Photos -->
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (1).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (2).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (3).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (4).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (5).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (6).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (7).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (8).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (9).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (10).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (11).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (12).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <!-- Duplicate Set for Seamless Loop -->
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (1).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (2).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (3).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (4).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (5).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (6).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (7).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (8).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (9).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (10).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (11).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="customer-photo-card flex-shrink-0 w-48 h-48 rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-blue-500 transition-all duration-300 group mx-3">
                        <img src="{{ asset('images/happy-customers/hc00 (12).jpg') }}" 
                             alt="Happy Laptop Expert Customer" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> --}}


@endsection

@push('scripts')
<script>
    // Add to Cart from Homepage Function
    function addToCartFromHome(productId, productName) {
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
            if (data.success) {
                // Update cart total (no count needed)
                if (window.updateCartTotal && data.cart_total !== undefined) {
                    window.updateCartTotal(data.cart_total);
                }
                
                // Show success notification
                if (window.showCartSuccessNotification) {
                    window.showCartSuccessNotification('Product added to cart successfully!');
                }
                
                // Animate cart addition (simplified)
                if (window.animateCartAddition) {
                    window.animateCartAddition(data.cart_total);
                }
            } else {
                alert(data.message || 'Failed to add product to cart');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Something went wrong. Please try again.');
        });
    }

    // Hero Slider Functionality
    class ImageSlider {
        constructor() {
            this.currentSlide = 0;
            this.slides = document.querySelectorAll('.hero-slide');
            this.dots = document.querySelectorAll('.slider-dot');
            this.totalSlides = this.slides.length;
            this.autoPlayInterval = null;
            this.init();
        }
        
        init() {
            // Add event listeners for navigation arrows
            const prevBtn = document.getElementById('prevSlide');
            const nextBtn = document.getElementById('nextSlide');
            
            if (prevBtn) prevBtn.addEventListener('click', () => this.prevSlide());
            if (nextBtn) nextBtn.addEventListener('click', () => this.nextSlide());
            
            // Add dot listeners
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });
            
            // Start auto-play
            setTimeout(() => {
                this.startAutoPlay();
            }, 6000);
            
            // Pause auto-play on hover
            const heroSlider = document.getElementById('heroSlider');
            if (heroSlider) {
                heroSlider.addEventListener('mouseenter', () => this.stopAutoPlay());
                heroSlider.addEventListener('mouseleave', () => this.startAutoPlay());
            }

            // Touch/swipe support for mobile
            this.addTouchSupport();
        }
        
        goToSlide(slideIndex) {
            this.stopAutoPlay();
            
            if (slideIndex === this.currentSlide) {
                this.startAutoPlay();
                return;
            }
            
            const currentSlide = this.slides[this.currentSlide];
            const nextSlide = this.slides[slideIndex];
            
            if (!currentSlide || !nextSlide) return;
            
            const isNextSlide = slideIndex > this.currentSlide || (slideIndex === 0 && this.currentSlide === this.totalSlides - 1);
            
            // Hide all other slides
            this.slides.forEach((slide, idx) => {
                if (idx !== this.currentSlide && idx !== slideIndex) {
                    slide.classList.remove('active', 'prev');
                    slide.style.transform = 'translateX(100%)';
                    slide.style.opacity = '0';
                    slide.style.zIndex = '1';
                    slide.style.pointerEvents = 'none';
                }
            });
            
            // Position the new slide
            if (isNextSlide) {
                nextSlide.style.transform = 'translateX(100%)';
            } else {
                nextSlide.style.transform = 'translateX(-100%)';
            }
            nextSlide.style.opacity = '0';
            nextSlide.style.zIndex = '10';
            nextSlide.style.pointerEvents = 'none';
            
            // Set current slide to exiting state
            currentSlide.style.zIndex = '5';
            currentSlide.style.pointerEvents = 'none';
            
            // Transition
            requestAnimationFrame(() => {
                currentSlide.classList.remove('active');
                currentSlide.classList.add('prev');
                
                if (isNextSlide) {
                    currentSlide.style.transform = 'translateX(-100%)';
                } else {
                    currentSlide.style.transform = 'translateX(100%)';
                }
                currentSlide.style.opacity = '0';
            
                setTimeout(() => {
                    this.currentSlide = slideIndex;
                    
                    nextSlide.classList.add('active');
                    nextSlide.classList.remove('prev');
                    nextSlide.style.transform = 'translateX(0)';
                    nextSlide.style.opacity = '1';
                    nextSlide.style.zIndex = '15';
                    nextSlide.style.pointerEvents = 'auto';
                
                    // Update dots
                    this.dots.forEach((dot, idx) => {
                        if (idx === this.currentSlide) {
                            dot.classList.add('active');
                            dot.classList.remove('bg-white/40');
                            dot.classList.add('bg-white/80');
                        } else {
                            dot.classList.remove('active');
                            dot.classList.remove('bg-white/80');
                            dot.classList.add('bg-white/40');
                        }
                    });
                
                    setTimeout(() => {
                        currentSlide.classList.remove('prev');
                        currentSlide.style.transform = 'translateX(100%)';
                        currentSlide.style.opacity = '0';
                        currentSlide.style.zIndex = '1';
                    }, 1600);
                
                }, 50);
            
                setTimeout(() => {
                    this.startAutoPlay();
                }, 1700);
            });
        }
        
        nextSlide() {
            const nextIndex = (this.currentSlide + 1) % this.totalSlides;
            this.goToSlide(nextIndex);
        }
        
        prevSlide() {
            const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
            this.goToSlide(prevIndex);
        }
        
        startAutoPlay() {
            this.autoPlayInterval = setInterval(() => {
                this.nextSlide();
            }, 8000);
        }
        
        stopAutoPlay() {
            if (this.autoPlayInterval) {
                clearInterval(this.autoPlayInterval);
                this.autoPlayInterval = null;
            }
        }

        addTouchSupport() {
            let startX = 0;
            let endX = 0;
            const slider = document.getElementById('heroSlider');
            
            if (slider) {
                slider.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                });
                
                slider.addEventListener('touchend', (e) => {
                    endX = e.changedTouches[0].clientX;
                    this.handleSwipe();
                });
            }
        }

        handleSwipe() {
            const threshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    this.nextSlide();
                } else {
                    this.prevSlide();
                }
            }
        }
    }
    
    // Initialize slider when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            window.heroSlider = new ImageSlider();
        }, 100);
    });

</script>

<style>
    /* Hero Slider Styles */
    .hero-slider {
        position: relative;
    }
    
    .hero-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: translateX(100%);
        transition: transform 1.5s ease-in-out, 
                    opacity 1.5s ease-in-out;
        z-index: 1;
        opacity: 0;
        pointer-events: none;
        will-change: transform, opacity;
    }
    
    .hero-slide:first-child {
        transform: translateX(0);
        opacity: 1;
        z-index: 15;
        pointer-events: auto;
    }
    
    .hero-slide.active {
        transform: translateX(0) !important;
        opacity: 1 !important;
        z-index: 15 !important;
        pointer-events: auto !important;
    }
    
    .hero-slide.prev {
        transform: translateX(-100%) !important;
        opacity: 0 !important;
        z-index: 5 !important;
        pointer-events: none !important;
    }
    
    .hero-slide:not(.active):not(.prev) {
        z-index: 1 !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }

    /* Ensure images fully cover the container */
    .hero-slide {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    
    .hero-slide-image,
    .hero-slide > img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center center !important;
        display: block;
        margin: 0;
        padding: 0;
        border: none;
        min-width: 100%;
        min-height: 100%;
        max-width: none;
        max-height: none;
    }
    
    .hero-slide.active .hero-slide-image,
    .hero-slide.active > img {
        transform: scale(1);
    }

    @media (max-width: 640px) {
        .hero-slide {
            transition: transform 1.2s ease-in-out;
        }
        
        .hero-slide > img {
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 100%;
        }
    }

    .hero-slide img {
        will-change: transform;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
    }
    
    /* Force full coverage - no gaps */
    .hero-slider {
        overflow: hidden;
        position: relative;
    }
    
    .hero-slider .hero-slide img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        object-position: center center !important;
    }
    
    /* Overlay text animations */
    .hero-slide .absolute {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1.2s ease-in-out, transform 1.2s ease-in-out;
        z-index: 20 !important;
        pointer-events: auto;
    }
    
    .hero-slide.active .absolute,
    .hero-slide:first-child .absolute {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    
    /* Stagger animation for overlay content */
    .hero-slide.active .absolute > div,
    .hero-slide:first-child .absolute > div {
        animation: fadeInUp 1.2s ease-out forwards;
    }
    
    .hero-slide.active .absolute > div > div:first-child,
    .hero-slide:first-child .absolute > div > div:first-child {
        animation-delay: 0.3s;
        opacity: 0;
        animation-fill-mode: forwards;
        animation: fadeInUp 1.2s ease-out 0.3s forwards;
    }
    
    .hero-slide.active .absolute > div > h2,
    .hero-slide:first-child .absolute > div > h2 {
        animation-delay: 0.5s;
        opacity: 0;
        animation-fill-mode: forwards;
        animation: fadeInUp 1.2s ease-out 0.5s forwards;
    }
    
    .hero-slide.active .absolute > div > p,
    .hero-slide:first-child .absolute > div > p {
        animation-delay: 0.7s;
        opacity: 0;
        animation-fill-mode: forwards;
        animation: fadeInUp 1.2s ease-out 0.7s forwards;
    }
    
    .hero-slide.active .absolute > div > a,
    .hero-slide:first-child .absolute > div > a {
        animation-delay: 0.9s;
        opacity: 0;
        animation-fill-mode: forwards;
        animation: fadeInUp 1.2s ease-out 0.9s forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: slideUp 0.4s ease-out forwards;
        opacity: 0;
        transform: translateY(30px);
    }
    
    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* TEMPORARILY HIDDEN: Continuous Customer Photo Carousel Styles */
    /* .customer-carousel-container {
        width: 100%;
        overflow: hidden;
        padding: 2rem 0;
        mask: linear-gradient(90deg, transparent, white 10%, white 90%, transparent);
        -webkit-mask: linear-gradient(90deg, transparent, white 10%, white 90%, transparent);
    }

    .carousel-track-continuous {
        display: flex;
        width: fit-content;
        animation: scrollRight 60s linear infinite;
    }

    @keyframes scrollRight {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    .customer-photo-card {
        backdrop-filter: blur(10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .customer-photo-card:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 15px 35px rgba(245, 158, 11, 0.25);
        filter: brightness(1.1);
    }

    /* Pause animation on hover */
    .customer-carousel-container:hover .carousel-track-continuous {
        animation-play-state: paused;
    }

    /* Responsive Design */
    @media (max-width: 640px) {
        .customer-photo-card {
            width: 160px !important;
            height: 160px !important;
        }
        
        .customer-photo-card:hover {
            transform: translateY(-3px) scale(1.02);
        }
    }

    @media (max-width: 480px) {
        .customer-photo-card {
            width: 140px !important;
            height: 140px !important;
        }
    } */
</style>


@endpush

