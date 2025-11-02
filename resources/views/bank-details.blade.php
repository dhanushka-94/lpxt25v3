@extends('layouts.app')

@section('title', 'Bank Details - Payment Information | LAPTOP EXPERT')
@section('description', 'Complete payment instructions and secure banking options for your laptop purchases at Laptop Expert. Multiple bank accounts available for easy payments.')
@section('keywords', 'bank details, payment, Laptop Expert, bank transfer, payment methods, Sri Lanka banking, laptop purchase payment')

@section('content')
<!-- Hero Section -->
<section class="py-8 md:py-12 bg-gradient-to-b from-black to-[#0f0f0f]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <div class="inline-flex items-center px-3 py-1.5 bg-blue-500/10 border border-blue-500/20 rounded-lg text-blue-400 text-xs font-medium mb-4">
                <svg class="w-3.5 h-3.5 mr-1.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586l-2 2V7H5v10h6.586l2 2H4a1 1 0 01-1-1V4z"/>
                    <path d="M17.414 8L21 11.586 11.586 21H8v-3.586L17.414 8z"/>
                </svg>
                Payment Information
            </div>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-3">Bank Details & Payment Info</h1>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">Complete payment instructions for secure bank transfers</p>
        </div>
    </div>
</section>

<!-- Bank Account Card - Compact -->
<section class="py-8 md:py-12 bg-[#0f0f0f]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] border-2 border-blue-500/50 rounded-2xl p-6 md:p-8 relative overflow-hidden shadow-2xl">
            <!-- Primary Badge -->
            <div class="absolute top-3 right-3">
                <span class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-xs font-bold px-2.5 py-1 rounded-full shadow-lg">Primary Account</span>
            </div>
            
            <!-- Bank Logo & Header -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 mb-6">
                <div class="w-16 h-16 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0 p-2 border border-blue-500/20">
                    <img src="{{ asset('images/commercial_bank.png') }}" alt="Commercial Bank" class="w-full h-full object-contain">
                </div>
                <div class="text-center sm:text-left flex-1">
                    <h2 class="text-2xl font-bold text-white mb-1">Commercial Bank</h2>
                    <p class="text-gray-400 text-sm">Ragama Branch</p>
                </div>
            </div>
            
            <!-- Bank Details Grid - Compact -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-6">
                <div class="bg-black/40 border border-gray-700/50 rounded-lg p-3">
                    <p class="text-gray-400 text-xs mb-1 font-medium">Account Name</p>
                    <p class="text-white font-semibold text-sm break-words">LAPTOP EXPERT (PVT) LTD</p>
                </div>
                
                <div class="bg-black/40 border border-blue-500/30 rounded-lg p-3">
                    <p class="text-gray-400 text-xs mb-1 font-medium">Account Number</p>
                    <p class="text-blue-400 font-bold text-lg">1000926420</p>
                </div>

                <div class="bg-black/40 border border-gray-700/50 rounded-lg p-3">
                    <p class="text-gray-400 text-xs mb-1 font-medium">Branch</p>
                    <p class="text-white font-semibold text-sm">Ragama Branch</p>
                </div>

                <div class="bg-black/40 border border-gray-700/50 rounded-lg p-3">
                    <p class="text-gray-400 text-xs mb-1 font-medium">Branch Code</p>
                    <p class="text-white font-semibold text-sm">221</p>
                </div>

                <div class="bg-black/40 border border-gray-700/50 rounded-lg p-3 sm:col-span-2 lg:col-span-1">
                    <p class="text-gray-400 text-xs mb-1 font-medium">Swift Code</p>
                    <p class="text-white font-semibold text-sm font-mono">CCEYLKLX</p>
                </div>

                <!-- Copy Button -->
                <div class="bg-gradient-to-r from-blue-500/20 to-blue-600/20 border border-blue-500/30 rounded-lg p-3 sm:col-span-2 lg:col-span-3 flex items-center justify-between">
                    <div>
                        <p class="text-blue-400 text-xs font-medium mb-1">Quick Copy</p>
                        <p class="text-white text-sm font-mono">1000926420</p>
                    </div>
                    <button onclick="copyAccountNumber()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        Copy
                    </button>
                </div>
            </div>

            <!-- WhatsApp Contact -->
            <div class="bg-green-600/10 border border-green-500/30 rounded-lg p-4">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.386"/>
                    </svg>
                    <div class="flex-1">
                        <p class="text-green-400 font-medium text-sm">Send Payment Slip via WhatsApp</p>
                        <a href="https://wa.me/94764442221" target="_blank" class="text-white font-bold text-base hover:text-green-400 transition-colors">0764442221</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Notices - Compact Grid -->
<section class="py-6 md:py-8 bg-black">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-6 text-center">Important Payment Notes</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Stock Confirmation -->
            <div class="bg-[#1a1a1c] border-l-4 border-red-500 rounded-lg p-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-red-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.728-.833-2.498 0L4.316 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-red-400 mb-1">Stock Confirmation Required</h3>
                        <p class="text-gray-300 text-xs mb-1">Confirm stock availability before payment</p>
                        <p class="text-gray-400 text-xs">ස්ටොක් පැවතීම සහතික කරන්න</p>
                    </div>
                </div>
            </div>

            <!-- No COD -->
            <div class="bg-[#1a1a1c] border-l-4 border-orange-500 rounded-lg p-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-orange-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-orange-400 mb-1">No Cash on Delivery</h3>
                        <p class="text-gray-300 text-xs mb-1">Cash on delivery not available</p>
                        <p class="text-gray-400 text-xs">COD නොමැත</p>
                    </div>
                </div>
            </div>

            <!-- Full Payment -->
            <div class="bg-[#1a1a1c] border-l-4 border-blue-500 rounded-lg p-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-blue-400 mb-1">Full Payment Required</h3>
                        <p class="text-gray-300 text-xs mb-1">Complete payment before shipping</p>
                        <p class="text-gray-400 text-xs">සම්පූර්ණ ගෙවීම අවශ්‍ය</p>
                    </div>
                </div>
            </div>

            <!-- Pre-order Policy -->
            <div class="bg-[#1a1a1c] border-l-4 border-green-500 rounded-lg p-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 7a2 2 0 01-2 2H8a2 2 0 01-2-2L5 9z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-green-400 mb-1">Pre-order: 50% Deposit</h3>
                        <p class="text-gray-300 text-xs mb-1">Pre-orders require 50% payment</p>
                        <p class="text-gray-400 text-xs">පෙර-ඇණීම: 50% ගෙවීම</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Instructions - Compact -->
<section class="py-6 md:py-8 bg-[#0f0f0f]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-6 text-center">How to Pay</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-xl font-bold text-blue-400">1</span>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">Choose Account</h3>
                <p class="text-gray-400 text-xs">Use bank details above</p>
            </div>

            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-xl font-bold text-blue-400">2</span>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">Make Transfer</h3>
                <p class="text-gray-400 text-xs">Include your name & phone</p>
            </div>

            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-xl font-bold text-blue-400">3</span>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">Send Proof</h3>
                <p class="text-gray-400 text-xs">WhatsApp payment slip</p>
            </div>

            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-xl font-bold text-blue-400">4</span>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">Provide Address</h3>
                <p class="text-gray-400 text-xs">Full address & 2 phones</p>
            </div>
        </div>
    </div>
</section>

<!-- Payment Confirmation & Address Requirements - Compact Side by Side -->
<section class="py-6 md:py-8 bg-black">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Payment Confirmation -->
            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white">Payment Confirmation</h3>
                </div>
                <p class="text-gray-300 text-xs mb-3">Send payment slip screenshot via WhatsApp after transferring</p>
                <div class="bg-green-600/10 border border-green-500/30 rounded-lg p-3">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.386"/>
                        </svg>
                        <p class="text-green-400 font-medium text-sm">WhatsApp: <a href="https://wa.me/94764442221" target="_blank" class="text-white hover:text-green-300">0764442221</a></p>
                    </div>
                </div>
            </div>

            <!-- Address Requirements -->
            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white">Required Information</h3>
                </div>
                <ul class="space-y-2 text-xs text-gray-300">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                        Your full name
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                        Complete delivery address
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                        2 telephone numbers
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                        Nearest major city/district
                    </li>
                </ul>
            </div>
        </div>

        <!-- Card Payment Policy -->
        <div class="mt-4 bg-[#1a1a1c] border-l-4 border-purple-500 rounded-lg p-4">
            <div class="flex items-start gap-3">
                <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                    <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-purple-400 mb-1">Card Payment</h3>
                    <p class="text-gray-300 text-xs mb-1">Card payment can be made only by visiting the shop</p>
                    <p class="text-gray-400 text-xs">කාඩ් ගෙවීම shop එකට පැමිණීමෙන් පමණක්</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact & Quick Processing -->
<section class="py-6 md:py-8 bg-gradient-to-b from-[#0f0f0f] to-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">Call Us</h3>
                <a href="tel:0764442221" class="text-blue-400 font-bold text-sm hover:text-blue-300">076 444 222 1</a>
                <p class="text-gray-400 text-xs mt-1">011 296 066 0</p>
            </div>

            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.386"/>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">WhatsApp</h3>
                <a href="https://wa.me/94764442221" target="_blank" class="text-green-400 font-bold text-sm hover:text-green-300">0764442221</a>
            </div>

            <div class="bg-[#1a1a1c] border border-gray-800 rounded-lg p-4 text-center">
                <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-2">
                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-sm font-semibold text-white mb-1">Visit Store</h3>
                <p class="text-gray-400 text-xs">296/3/C, Delpe Junction</p>
                <p class="text-gray-400 text-xs">Ragama</p>
            </div>
        </div>
        
        <div class="bg-gradient-to-r from-green-600/10 to-blue-600/10 border border-green-500/30 rounded-lg p-4 text-center">
            <div class="flex items-center justify-center gap-2 mb-2">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-green-400 font-medium text-sm">Quick Processing</p>
            </div>
            <p class="text-white text-base font-semibold">Orders processed within 24 hours of payment confirmation</p>
        </div>
    </div>
</section>

<script>
function copyAccountNumber() {
    const accountNumber = '1000926420';
    navigator.clipboard.writeText(accountNumber).then(function() {
        // Show success feedback
        const button = event.target.closest('button');
        const originalText = button.innerHTML;
        button.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Copied!';
        button.classList.add('bg-green-500', 'hover:bg-green-600');
        button.classList.remove('bg-blue-500', 'hover:bg-blue-600');
        
        setTimeout(() => {
            button.innerHTML = originalText;
            button.classList.remove('bg-green-500', 'hover:bg-green-600');
            button.classList.add('bg-blue-500', 'hover:bg-blue-600');
        }, 2000);
    });
}
</script>
@endsection
