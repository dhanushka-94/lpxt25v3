@extends('layouts.app')

@section('title', $product->name . ' - LAPTOP EXPERT | Laptops, Accessories & Services in Sri Lanka')
@section('description', $product->details ? Str::limit(strip_tags($product->details), 160) : $product->name . ' - Available at Laptop Expert. Brand new and used laptops, laptop accessories, and professional repair services in Sri Lanka.')
@section('keywords', $product->name . ', ' . ($product->category ? $product->category->name : '') . ', laptop, laptops Sri Lanka, laptop accessories, laptop parts, Laptop Expert, Sri Lanka, ' . ($product->code ? $product->code : ''))
@section('og_title', $product->name . ' - LKR ' . number_format($product->final_price, 2) . ' at LAPTOP EXPERT')
@section('og_description', $product->details ? Str::limit(strip_tags($product->details), 200) : 'Premium ' . $product->name . ' available at Laptop Expert. Expert laptop sales, repair services, and accessories in Sri Lanka.')
@section('og_image', $product->main_image)
@section('og_type', 'product')

@section('content')
<!-- Product Details - Modern Redesign -->
<section class="py-8 sm:py-12 bg-gradient-to-b from-black via-[#0a0a0a] to-black relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute w-96 h-96 rounded-full bg-blue-500/5 blur-3xl -top-48 -left-48"></div>
        <div class="absolute w-96 h-96 rounded-full bg-blue-600/5 blur-3xl -bottom-48 -right-48"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6">
            <ol class="flex items-center space-x-2 text-sm text-gray-400">
                <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></li>
                <li><a href="{{ route('products.index') }}" class="hover:text-blue-400 transition-colors">Products</a></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></li>
                <li><a href="{{ route('categories.show', $product->category->slug ?: $product->category->id) }}" class="hover:text-blue-400 transition-colors">{{ $product->category->name }}</a></li>
                <li><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></li>
                <li class="text-gray-500">{{ Str::limit($product->name, 30) }}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Product Images Gallery - Enhanced -->
            <div class="relative">
                <!-- Main Image Display -->
                <div class="relative bg-gradient-to-br from-[#0a0a0a] to-black rounded-2xl border-2 border-blue-500/20 p-4 sm:p-6 mb-6 shadow-2xl shadow-blue-500/5 group hover:border-blue-500/40 transition-all duration-300">
                    <div class="relative bg-white/5 backdrop-blur-sm rounded-xl overflow-hidden p-4 sm:p-8">
                    <img id="mainImage" 
                         src="{{ $product->images[0] ?? 'https://via.placeholder.com/600x400?text=No+Image' }}" 
                         alt="{{ $product->name }}" 
                             class="w-full h-auto max-h-[500px] sm:max-h-[600px] object-contain transition-transform duration-300 group-hover:scale-105">
                    </div>
                    
                    <!-- Sale Badge Overlay -->
                    @if($product->is_on_sale)
                        <div class="absolute top-6 left-6 z-10">
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white font-bold px-4 py-2 rounded-xl shadow-lg animate-pulse">
                                <span class="text-sm">🔥 HOT DEAL</span>
                            </div>
                        </div>
                    @endif
                </div>
                
                <!-- Thumbnail Gallery -->
                @if(count($product->images) > 1)
                    <div class="grid grid-cols-4 sm:grid-cols-5 gap-3">
                        @foreach($product->images as $index => $image)
                            <button onclick="changeMainImage('{{ $image }}', this)" 
                                    class="relative p-2 bg-gradient-to-br from-gray-800/50 to-black/50 rounded-xl border-2 {{ $index === 0 ? 'border-blue-500 ring-2 ring-blue-500/50' : 'border-gray-700/50 hover:border-blue-500/50' }} transition-all duration-300 hover:scale-105 group overflow-hidden">
                                <div class="aspect-square bg-white/5 rounded-lg p-2 overflow-hidden">
                                <img src="{{ $image }}" 
                                     alt="{{ $product->name }} - Image {{ $index + 1 }}"
                                     loading="lazy"
                                         class="w-full h-full object-contain rounded group-hover:opacity-80 transition-opacity">
                            </div>
                                @if($index === 0)
                                    <div class="absolute inset-0 bg-blue-500/10 rounded-xl"></div>
                                @endif
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Product Information - Modern Layout -->
            <div class="space-y-6">
                <!-- Category & Badges -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center px-4 py-2 bg-blue-500/10 border border-blue-500/30 rounded-lg text-blue-400 text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                        {{ $product->category->name }}
                    </span>
                    @if($product->is_on_sale)
                        <span class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500/20 to-pink-500/20 border border-red-500/40 rounded-lg text-red-400 text-sm font-bold">
                            💰 Save LKR {{ number_format($product->price - $product->promo_price, 2) }}
                        </span>
                    @endif
                    </div>

                <!-- Product Title -->
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                        {{ $product->name }}
                    </h1>
                    
                    <!-- Product Code -->
                    @if($product->code)
                        <div class="inline-flex items-center px-4 py-2 bg-gray-800/50 border border-gray-700/50 rounded-lg">
                                <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                            <span class="text-sm text-gray-400 mr-2">Code:</span>
                            <span class="text-sm font-mono text-white font-semibold">{{ $product->code }}</span>
                        </div>
                    @endif
                </div>

                <!-- Stock Status - Enhanced -->
                <div class="flex items-center gap-3">
                @if($product->status && in_array($product->status->status_name, ['Coming Soon', 'Pre Order']))
                        <div class="flex items-center gap-2 px-4 py-2 bg-blue-500/10 border border-blue-500/30 rounded-lg">
                            <span class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></span>
                            <span class="text-blue-400 font-semibold">{{ $product->status->status_name }}</span>
                    </div>
                @elseif($product->stock_quantity > 0)
                        <div class="flex items-center gap-2 px-4 py-2 bg-green-500/10 border border-green-500/30 rounded-lg">
                        <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                            <span class="text-green-400 font-semibold">In Stock</span>
                    </div>
                @else
                        <div class="flex items-center gap-2 px-4 py-2 bg-red-500/10 border border-red-500/30 rounded-lg">
                        <span class="w-3 h-3 bg-red-500 rounded-full"></span>
                            <span class="text-red-400 font-semibold">Out of Stock</span>
                    </div>
                @endif

                    @if($product->status)
                        @include('components.product-status-badge', ['product' => $product])
                    @endif
                </div>

                <!-- Price Display - Premium Design -->
                <div class="bg-gradient-to-br from-[#0a0a0a] via-black to-[#0a0a0a] border-2 border-blue-500/30 rounded-2xl p-6 shadow-xl shadow-blue-500/10">
                    @if($product->is_on_sale)
                        <div class="mb-4">
                            <div class="flex flex-col sm:flex-row sm:items-baseline gap-3 mb-3">
                                <span class="text-4xl sm:text-5xl font-bold text-blue-400">LKR {{ number_format($product->promo_price, 2) }}</span>
                                <span class="text-xl sm:text-2xl text-gray-500 line-through">LKR {{ number_format($product->price, 2) }}</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="inline-flex items-center px-3 py-1 bg-green-500/20 border border-green-500/40 rounded-lg text-green-400 text-sm font-semibold">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    Save LKR {{ number_format($product->price - $product->promo_price, 2) }}
                                </span>
                                <span class="inline-flex items-center px-3 py-1 bg-red-500/20 border border-red-500/40 rounded-lg text-red-400 text-sm font-semibold">
                                    {{ round((($product->price - $product->promo_price) / $product->price) * 100) }}% OFF
                                </span>
                            </div>
                        </div>
                    @else
                        <div>
                            @if($product->price > 0)
                                <span class="text-4xl sm:text-5xl font-bold text-blue-400">LKR {{ number_format($product->price, 2) }}</span>
                            @else
                                <span class="text-3xl sm:text-4xl font-bold text-blue-400">Contact for Price</span>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Add to Cart Section - Enhanced -->
                @if($product->can_add_to_cart)
                    <div class="bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-blue-500/30 rounded-2xl p-6 shadow-xl">
                        @if($product->is_on_sale)
                            <div class="mb-4 p-3 bg-gradient-to-r from-red-500/10 to-pink-500/10 border border-red-500/30 rounded-lg">
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-red-400 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                    <span class="text-red-400 font-semibold text-sm">⚡ Limited Time Offer - Act Fast!</span>
                        </div>
                    </div>
                @endif

                        <div class="space-y-4">
                            <!-- Quantity Selector -->
                            <div class="flex items-center gap-4">
                                <label class="text-gray-400 font-medium">Quantity:</label>
                                <div class="flex items-center border-2 border-gray-700/50 rounded-xl overflow-hidden bg-black/50">
                                    <button type="button" 
                                            class="px-4 py-3 text-white hover:text-blue-400 hover:bg-blue-500/10 transition-all" 
                                            onclick="decreaseQuantity()">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                        </svg>
                                    </button>
                                    <input type="number" 
                                           id="quantity" 
                                           value="1" 
                                           min="1" 
                                           max="99" 
                                           class="w-20 py-3 text-center bg-transparent text-white font-semibold border-x-2 border-gray-700/50 focus:outline-none focus:border-blue-500">
                                    <button type="button" 
                                            class="px-4 py-3 text-white hover:text-blue-400 hover:bg-blue-500/10 transition-all" 
                                            onclick="increaseQuantity()">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <button class="flex-1 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50 flex items-center justify-center gap-2" 
                                        onclick="addToCart({{ $product->id }})">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <span>{{ $product->is_on_sale ? 'Add to Cart (SALE!)' : 'Add to Cart' }}</span>
                                </button>
                                <button class="px-6 py-4 bg-gray-800/50 border-2 border-gray-700/50 hover:border-blue-500/50 text-white rounded-xl transition-all duration-300 hover:bg-blue-500/10" 
                                        onclick="addToWishlist({{ $product->id }})">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @else
                    @if($product->status && in_array($product->status->status_name, ['Coming Soon', 'Pre Order']))
                        <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 border-2 border-blue-500/30 rounded-2xl p-8 text-center">
                            <div class="text-blue-400 text-2xl font-bold mb-3">{{ $product->status->status_name }}</div>
                            <p class="text-gray-300 mb-4">{{ $product->cart_restriction_reason }}</p>
                            <p class="text-gray-500 text-sm">This product is currently not available for purchase.</p>
                        </div>
                    @else
                        <div class="bg-red-500/10 border-2 border-red-500/30 rounded-2xl p-8 text-center">
                            <div class="text-red-400 text-2xl font-bold mb-3">{{ $product->cart_restriction_reason ?: 'Unavailable' }}</div>
                            <p class="text-gray-300">This product is currently unavailable.</p>
                        </div>
                    @endif
                @endif

                <!-- Quick Info Cards -->
                <div class="grid grid-cols-2 gap-4">
                    @if($product->warranty)
                        <div class="bg-gradient-to-br from-gray-900/50 to-black/50 border border-blue-500/20 rounded-xl p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                <span class="text-sm text-gray-400">Warranty</span>
                            </div>
                            <span class="text-white font-semibold">{{ $product->warranty }}</span>
                        </div>
                    @endif
                    @if($product->model)
                        <div class="bg-gradient-to-br from-gray-900/50 to-black/50 border border-blue-500/20 rounded-xl p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <span class="text-sm text-gray-400">Model</span>
                            </div>
                            <span class="text-white font-semibold">{{ $product->model }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details & Specifications - Full Width Section -->
<section class="py-12 bg-gradient-to-b from-black to-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Product Description -->
                @if($product->description)
                    <div class="bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-blue-500/20 rounded-2xl p-6 sm:p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            </div>
                            <span>Description</span>
                        </h2>
                        <p class="text-gray-300 leading-relaxed text-lg">{{ $product->description }}</p>
                    </div>
                @endif

                <!-- Product Attributes -->
                @if($product->grouped_attributes && count($product->grouped_attributes) > 0)
                    <div class="bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-blue-500/20 rounded-2xl p-6 sm:p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            </div>
                            <span>Product Attributes</span>
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($product->grouped_attributes as $attributeName => $attributeValues)
                                <div class="bg-black/30 border border-gray-700/50 rounded-xl p-4 hover:border-blue-500/50 transition-colors">
                                    <span class="text-xs font-bold text-blue-400 mb-3 block uppercase tracking-wider">{{ $attributeName }}</span>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($attributeValues as $value)
                                            <span class="inline-block bg-gray-800/70 text-gray-300 text-sm font-medium px-3 py-1.5 rounded-lg border border-gray-700/50">
                                                {{ $value }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Product Details & Specifications -->
                @if($product->product_details && trim(strip_tags($product->product_details)))
                    @php
                        $htmlContent = $product->product_details;
                        $htmlContent = str_replace(['<p>', '<div>'], '', $htmlContent);
                        $htmlContent = str_replace(['</p>', '</div>'], "\n", $htmlContent);
                        $htmlContent = str_replace(['<br>', '<br/>', '<br />'], "\n", $htmlContent);
                        $htmlContent = str_replace('<ul>', "\n", $htmlContent);
                        $htmlContent = str_replace('</ul>', "\n", $htmlContent);
                        $htmlContent = str_replace('<li>', "• ", $htmlContent);
                        $htmlContent = str_replace('</li>', "\n", $htmlContent);
                        $cleanContent = strip_tags($htmlContent);
                        $cleanContent = html_entity_decode($cleanContent);
                        $cleanContent = preg_replace('/\n\s*\n/', "\n\n", $cleanContent);
                        $cleanContent = preg_replace('/\n{3,}/', "\n\n", $cleanContent);
                        $cleanContent = trim($cleanContent);
                        $lines = explode("\n", $cleanContent);
                        $lines = array_filter(array_map('trim', $lines));
                    @endphp
                    
                    <div class="bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-blue-500/20 rounded-2xl p-6 sm:p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                            </div>
                            <span>Product Details & Specifications</span>
                        </h2>
                        
                        <div class="space-y-3">
                            @foreach($lines as $line)
                                @if(!empty($line))
                                    @if(preg_match('/^\d+\.\s/', $line) || str_starts_with($line, '•'))
                                        <div class="flex items-start py-3 px-4 bg-black/30 rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-colors">
                                            <span class="text-gray-300 leading-relaxed">{{ $line }}</span>
                                        </div>
                                    @elseif(strpos($line, ':') !== false && strlen($line) < 100)
                                        @php
                                            $parts = explode(':', $line, 2);
                                            $key = trim($parts[0]);
                                            $value = isset($parts[1]) ? trim($parts[1]) : '';
                                        @endphp
                                        @if(!empty($value))
                                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-3 px-4 bg-black/30 rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-colors">
                                                <span class="text-gray-400 font-medium mb-1 sm:mb-0">{{ $key }}:</span>
                                                <span class="text-white font-semibold sm:text-right">{{ $value }}</span>
                                            </div>
                                        @else
                                            <div class="py-3 px-4 bg-blue-500/10 rounded-xl border border-blue-500/30">
                                                <div class="text-blue-400 font-bold text-center">{{ $key }}</div>
                                            </div>
                                        @endif
                                    @elseif(preg_match('/^[A-Z\s]+$/', $line) && strlen($line) < 50)
                                        <div class="py-3 px-4 bg-blue-500/10 rounded-xl border border-blue-500/30">
                                            <div class="text-blue-400 font-bold text-center">{{ $line }}</div>
                                        </div>
                                    @else
                                        <div class="py-3 px-4 bg-black/20 rounded-xl border border-gray-700/30">
                                            <span class="text-gray-300 leading-relaxed">{{ $line }}</span>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                @else
                    <!-- Fallback when no product details are available -->
                    @if($product->warranty || $product->model)
                        <div class="bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-blue-500/20 rounded-2xl p-6 sm:p-8 shadow-xl">
                            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                                </div>
                                <span>Product Information</span>
                            </h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @if($product->warranty)
                                    <div class="flex justify-between items-center py-4 px-5 bg-black/30 rounded-xl border border-gray-700/50">
                                    <span class="text-gray-400 font-medium">Warranty:</span>
                                    <span class="text-white font-semibold">{{ $product->warranty }}</span>
                                </div>
                            @endif
                            @if($product->model)
                                    <div class="flex justify-between items-center py-4 px-5 bg-black/30 rounded-xl border border-gray-700/50">
                                    <span class="text-gray-400 font-medium">Model:</span>
                                    <span class="text-white font-semibold">{{ $product->model }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
                @endif
            </div>

            <!-- Sidebar - Additional Info -->
            <div class="space-y-6">
                <!-- Contact Card -->
                <div class="bg-gradient-to-br from-blue-500/10 to-blue-600/10 border-2 border-blue-500/30 rounded-2xl p-6 shadow-xl">
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Need Help?
                    </h3>
                    <p class="text-gray-300 mb-4">Have questions about this product? Our expert team is here to help!</p>
                    <a href="/contact-us" class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-4 rounded-xl text-center transition-all duration-300 transform hover:scale-105">
                        Contact Us
                    </a>
                </div>

                <!-- Shipping Info -->
                <div class="bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-blue-500/20 rounded-2xl p-6 shadow-xl">
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a2 2 0 012-2h14a2 2 0 012 2v16l-7-3.5L5 20V4z"/>
                        </svg>
                        Shipping & Returns
                    </h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Island-wide delivery available</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Secure payment options</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Warranty included</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if($relatedProducts->count() > 0)
    <section class="py-12 bg-gradient-to-b from-[#0a0a0a] to-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-3">Related Products</h2>
                <p class="text-gray-400 text-lg">You might also be interested in these products</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="group bg-gradient-to-br from-[#0a0a0a] to-black border-2 border-gray-800/50 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2">
                        <!-- Product Image -->
                        <div class="relative bg-white/5 p-6">
                            <a href="{{ route('products.show', ['category' => $relatedProduct->category->slug ?: $relatedProduct->category->id, 'product' => $relatedProduct->slug]) }}">
                                <div class="aspect-square">
                                    <img src="{{ $relatedProduct->main_image ?? 'https://via.placeholder.com/400x400?text=No+Image' }}" 
                                         alt="{{ $relatedProduct->name }}" 
                                         loading="lazy"
                                         class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300">
                                </div>
                            </a>
                            
                            @if($relatedProduct->is_on_sale)
                                <div class="absolute top-4 right-4">
                                    <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">SALE</span>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Product Info -->
                        <div class="p-5">
                            <h3 class="text-base font-semibold text-white mb-3 line-clamp-2 min-h-[3rem]">
                                <a href="{{ route('products.show', ['category' => $relatedProduct->category->slug ?: $relatedProduct->category->id, 'product' => $relatedProduct->slug]) }}" 
                                   class="hover:text-blue-400 transition-colors">
                                    {{ $relatedProduct->name }}
                                </a>
                            </h3>
                            
                            <!-- Price -->
                            <div class="mb-3">
                                @if($relatedProduct->is_on_sale)
                                    <div class="space-y-1">
                                        <span class="text-sm text-gray-500 line-through block">LKR {{ number_format($relatedProduct->price, 0) }}</span>
                                        <span class="text-lg font-bold text-blue-400">LKR {{ number_format($relatedProduct->promo_price, 0) }}</span>
                                    </div>
                                @else
                                    @if($relatedProduct->price > 0)
                                        <span class="text-lg font-bold text-white">LKR {{ number_format($relatedProduct->price, 0) }}</span>
                                    @else
                                        <span class="text-base font-bold text-blue-400">Contact for Price</span>
                                    @endif
                                @endif
                            </div>
                            
                            <!-- Stock Status -->
                            <div class="flex items-center justify-between mb-4">
                                @if($relatedProduct->status && in_array($relatedProduct->status->status_name, ['Coming Soon', 'Pre Order']))
                                    <span class="text-xs text-blue-400 flex items-center">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-1"></span>
                                        {{ $relatedProduct->status->status_name }}
                                    </span>
                                @elseif($relatedProduct->stock_quantity > 0)
                                    <span class="text-xs text-green-400 flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1"></span>
                                        In Stock
                                    </span>
                                @else
                                    <span class="text-xs text-red-400 flex items-center">
                                        <span class="w-2 h-2 bg-red-500 rounded-full mr-1"></span>
                                        Out of Stock
                                    </span>
                                @endif
                            </div>
                            
                            <!-- Add to Cart Button -->
                            @if($relatedProduct->can_add_to_cart)
                                <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-4 rounded-xl transition-all duration-300 transform hover:scale-105" 
                                        onclick="addToCart({{ $relatedProduct->id }})">
                                    Add to Cart
                                </button>
                            @else
                                <button class="w-full bg-gray-700/50 text-gray-400 font-medium py-3 px-4 rounded-xl cursor-not-allowed" 
                                        disabled title="{{ $relatedProduct->cart_restriction_reason }}">
                                    {{ $relatedProduct->cart_restriction_reason ?: 'Unavailable' }}
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@endsection

@push('scripts')
<script>
    function changeMainImage(src, thumbnail) {
        document.getElementById('mainImage').src = src;
        
        // Update thumbnail borders
        document.querySelectorAll('button[onclick*="changeMainImage"]').forEach(btn => {
            btn.classList.remove('border-blue-500', 'ring-2', 'ring-blue-500/50');
            btn.classList.add('border-gray-700/50');
        });
        thumbnail.classList.remove('border-gray-700/50');
        thumbnail.classList.add('border-blue-500', 'ring-2', 'ring-blue-500/50');
    }
    
    function increaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        const max = parseInt(quantityInput.getAttribute('max'));
        const current = parseInt(quantityInput.value);
        
        if (current < max) {
            quantityInput.value = current + 1;
        }
    }
    
    function decreaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        const current = parseInt(quantityInput.value);
        
        if (current > 1) {
            quantityInput.value = current - 1;
        }
    }
    
    function addToCart(productId) {
        const quantity = document.getElementById('quantity').value;
        const button = event.target;
        const originalText = button.textContent;
        
        button.disabled = true;
        button.textContent = 'Adding...';
        button.classList.add('opacity-75', 'cursor-not-allowed');

        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: parseInt(quantity)
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            button.disabled = false;
            button.textContent = originalText;
            button.classList.remove('opacity-75', 'cursor-not-allowed');
            
            if (data.success) {
                if (data.cart_total !== undefined) {
                    localStorage.setItem('cartTotal', data.cart_total);
                }
                
                const productName = document.querySelector('h1').textContent.trim();
                
                try {
                    window.animateCartAddition(data.cart_total, productName);
                } catch (animError) {
                    console.error('Animation error:', animError);
                    showNotification('Product added to cart successfully!', 'success');
                }
            } else {
                showNotification(data.message || 'Failed to add product to cart', 'error');
            }
        })
        .catch(error => {
            button.disabled = false;
            button.textContent = originalText;
            button.classList.remove('opacity-75', 'cursor-not-allowed');
            console.error('Cart Error Details:', error);
            showNotification('Something went wrong. Please try again.', 'error');
        });
    }

        function showNotification(message, type) {
            const notification = document.createElement('div');
        notification.className = `fixed top-24 right-4 z-[99999] p-4 rounded-xl shadow-2xl transition-all transform translate-x-full ${
            type === 'success' ? 'bg-gradient-to-r from-green-600 to-green-700 text-white' : 'bg-gradient-to-r from-red-600 to-red-700 text-white'
            }`;
            notification.style.zIndex = '99999';
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
                notification.classList.add('translate-x-0');
            }, 10);
            
            setTimeout(() => {
                notification.classList.add('opacity-0', 'translate-x-full');
                setTimeout(() => {
                    if (notification.parentNode) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            }, 3000);
        }
    
    function addToWishlist(productId) {
        alert('Wishlist functionality will be implemented in the next phase!');
    }
</script>
@endpush
