@extends('layouts.app')

@section('title', 'LAPTOP EXPERT - Brand New & Used Laptops, Repair & Service, Accessories in Sri Lanka')
@section('description', 'Laptop Expert - Your trusted destination for brand new and used laptops, professional laptop repair services, and all laptop accessories in Sri Lanka. Expert technicians, quality products, and affordable prices.')
@section('keywords', 'laptops Sri Lanka, brand new laptops, used laptops, laptop repair Sri Lanka, laptop service, laptop accessories, laptop parts, laptop screen repair, laptop battery, laptop charger, laptop keyboard, laptop bag, laptop cooling pad, Laptop Expert, Colombo')
@section('og_title', 'LAPTOP EXPERT - Brand New & Used Laptops, Repair & Service in Sri Lanka')
@section('og_description', 'Discover brand new and used laptops, expert laptop repair services, and comprehensive laptop accessories at Laptop Expert. Quality products with warranty and expert service in Sri Lanka.')
@section('og_type', 'website')

@section('content')

<!-- Static Hero Section -->
<section class="relative overflow-hidden min-h-[500px] sm:min-h-[600px] md:min-h-[700px] flex items-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/sliders/slider1 (1).jpg') }}" 
             alt="Laptop Expert Hero Background" 
             class="w-full h-full object-cover"
             loading="eager">
        <!-- Dark Overlay for better text readability -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black/80"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 lg:py-32 text-center">
        <div class="inline-flex items-center px-4 py-2 bg-blue-500/10 border border-blue-500/30 rounded-lg text-blue-400 text-sm font-medium mb-6 backdrop-blur-sm">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
            Trusted Since 2010
        </div>
        
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Your Trusted <span class="bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 bg-clip-text text-transparent">Laptop</span> Partner
        </h1>
        
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto leading-relaxed">
            Discover premium laptops, expert repairs, and comprehensive accessories. Quality products with warranty and professional service across Sri Lanka.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/categories" 
               class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105 shadow-lg shadow-blue-500/30">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                Shop Now
            </a>
            
            <a href="/services" 
               class="inline-flex items-center justify-center px-8 py-4 bg-white/10 border border-white/20 hover:border-blue-500/50 text-white font-semibold rounded-lg transition-all duration-300 hover:bg-white/20 backdrop-blur-sm">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
                Our Services
            </a>
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-10 flex flex-wrap items-center justify-center gap-6 text-sm text-gray-300">
            <div class="flex items-center gap-2 bg-black/30 px-4 py-2 rounded-lg backdrop-blur-sm border border-white/10">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                <span>100% Warranty</span>
            </div>
            <div class="flex items-center gap-2 bg-black/30 px-4 py-2 rounded-lg backdrop-blur-sm border border-white/10">
                <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.5 6L12 10.5 8.5 8 12 5.5 15.5 8zM8.5 16L12 13.5 15.5 16 12 18.5 8.5 16zm7-4L12 15.5 8.5 13l3.5-2.5L15.5 13z"/>
                </svg>
                <span>Island-wide Delivery</span>
            </div>
            <div class="flex items-center gap-2 bg-black/30 px-4 py-2 rounded-lg backdrop-blur-sm border border-white/10">
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                <span>Expert Support</span>
            </div>
        </div>
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


</script>

<style>
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

