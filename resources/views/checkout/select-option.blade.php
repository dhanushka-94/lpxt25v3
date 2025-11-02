@extends('layouts.app')

@section('title', 'Choose Your Option - LAPTOP EXPERT')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0f0f0f] via-[#1a1a1c] to-[#0f0f0f] py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Choose Your Option</h1>
            <p class="text-xl text-gray-300">How would you like to proceed with your order?</p>
        </div>

        <!-- Online Shop Coming Soon Notification -->
        <div class="bg-gradient-to-r from-blue-600/20 via-purple-600/20 to-pink-600/20 border-2 border-blue-500/50 rounded-2xl p-8 mb-8 shadow-2xl shadow-blue-500/20">
            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                </div>
                <div class="text-center md:text-left flex-1">
                    <h2 class="text-2xl md:text-3xl font-bold text-white mb-2 flex items-center justify-center md:justify-start gap-2">
                        <span>🛒</span>
                        <span>Online Shop Coming Soon!</span>
                    </h2>
                    <p class="text-lg text-blue-200 mb-2">We're working hard to bring you an amazing online shopping experience.</p>
                    <p class="text-base text-gray-300">In the meantime, please use the <span class="font-semibold text-blue-400">Get Quote</span> option or contact us directly for your purchase.</p>
                </div>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="bg-gradient-to-r from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6 mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l-1 12H6L5 9z"/>
                    </svg>
                    <span class="text-lg font-semibold text-white">Your Cart</span>
                </div>
                <div class="text-right">
                    <div class="text-2xl font-bold text-primary-400" id="cart-total">LKR 0.00</div>
                    <div class="text-sm text-gray-400" id="cart-items-count">0 items</div>
                </div>
            </div>
        </div>

        <!-- Options -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            
            <!-- Get Quote Option -->
            <div class="bg-gradient-to-br from-blue-900/20 to-indigo-900/20 border-2 border-blue-500 rounded-2xl p-8 hover:border-blue-400 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-300 group cursor-pointer" onclick="selectOption('quotation')">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-500/30 transition-colors">
                        <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Get Quote</h3>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Download a professional PDF quotation for budget approval or procurement processes.
                    </p>
                    
                    <!-- Features -->
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center justify-center space-x-2 text-blue-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Professional PDF format</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-blue-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Valid for 7 days</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-blue-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Company letterhead</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-blue-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">No payment required</span>
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform group-hover:scale-105 shadow-lg">
                        Get Quote
                    </button>
                </div>
            </div>

            <!-- Buy Now Option - TEMPORARILY DISABLED -->
            <div class="bg-gradient-to-br from-gray-900/40 to-gray-800/40 border-2 border-gray-600 rounded-2xl p-8 relative opacity-60 cursor-not-allowed" style="pointer-events: none;">
                <!-- Disabled Overlay -->
                <div class="absolute inset-0 bg-black/50 rounded-2xl flex items-center justify-center z-10">
                    <div class="text-center px-4">
                        <div class="w-16 h-16 bg-yellow-500/20 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                        <p class="text-yellow-400 font-bold text-lg mb-1">Coming Soon</p>
                        <p class="text-gray-300 text-sm">Online shop will be available soon</p>
                    </div>
                </div>
                
                <div class="text-center opacity-50">
                    <div class="w-20 h-20 bg-gray-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Buy Now</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Complete your purchase with secure payment options and fast delivery.
                    </p>
                    
                    <!-- Features -->
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center justify-center space-x-2 text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Secure payment options</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Fast delivery</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Order tracking</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2 text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm">Email updates</span>
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-gray-600 to-gray-700 text-gray-300 font-bold py-4 px-6 rounded-xl cursor-not-allowed" disabled>
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Back to Cart -->
        <div class="text-center">
            <a href="{{ route('cart.index') }}" class="inline-flex items-center space-x-2 text-gray-400 hover:text-primary-400 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                <span>Back to Cart</span>
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Load cart summary
    loadCartSummary();
    
    // Check if cart is empty
    checkCartEmpty();
    
    // Add click event listeners to option cards
    const quotationCard = document.querySelector('[onclick*="quotation"]');
    
    if (quotationCard) {
        quotationCard.addEventListener('click', function(e) {
            e.preventDefault();
            selectOption('quotation');
        });
    }
    
    // TEMPORARILY DISABLED: Buy Now option is blocked
    // const paymentCard = document.querySelector('[onclick*="payment"]');
    // if (paymentCard) {
    //     paymentCard.addEventListener('click', function(e) {
    //         e.preventDefault();
    //         selectOption('payment');
    //     });
    // }
    
    // Also add listeners to buttons inside cards
    const allButtons = document.querySelectorAll('button:not([disabled])');
    allButtons.forEach(button => {
        if (button.textContent.includes('Get Quote')) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                selectOption('quotation');
            });
        } else if (button.textContent.includes('Buy Now')) {
            // Block Buy Now button clicks
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                alert('Online Shop will be available soon! Please use the Get Quote option for now.');
                return false;
            });
        }
    });
});

function loadCartSummary() {
    const totalElement = document.getElementById('cart-total');
    const countElement = document.getElementById('cart-items-count');
    
    if (totalElement) totalElement.textContent = 'Loading...';
    if (countElement) countElement.textContent = 'Loading...';
    
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
                if (totalElement) {
                    totalElement.textContent = 'LKR ' + data.total.toLocaleString('en-US', {minimumFractionDigits: 2});
                }
                if (countElement) {
                    countElement.textContent = data.count + ' item' + (data.count !== 1 ? 's' : '');
                }
            } else {
                if (totalElement) totalElement.textContent = 'Error loading';
                if (countElement) countElement.textContent = 'Error';
            }
        })
        .catch(error => {
            if (totalElement) totalElement.textContent = 'LKR 0.00';
            if (countElement) countElement.textContent = '0 items';
        });
}

function checkCartEmpty() {
    fetch('/cart/count')
        .then(response => response.json())
        .then(data => {
            if (data.count === 0) {
                window.location.href = '{{ route("cart.index") }}';
            }
        })
        .catch(error => {
            // Silently handle error
        });
}

function selectOption(type) {
    // Block Buy Now option
    if (type === 'payment') {
        alert('Online Shop will be available soon! Please use the Get Quote option for now.');
        return false;
    }
    
    // Add loading state
    const buttons = document.querySelectorAll('button:not([disabled])');
    buttons.forEach(btn => {
        if (!btn.disabled) {
            btn.disabled = true;
            btn.innerHTML = 'Loading...';
        }
    });
    
    if (type === 'quotation') {
        window.location.href = '{{ route("checkout.quotation") }}';
    } else if (type === 'payment') {
        // TEMPORARILY DISABLED: Redirect blocked
        alert('Online Shop will be available soon! Please use the Get Quote option for now.');
        return false;
    }
}

</script>
@endsection

