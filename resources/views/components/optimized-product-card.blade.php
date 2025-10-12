{{-- Optimized Product Card Component --}}
@props(['product'])

<div class="card card-hover overflow-hidden group">
    <div class="relative">
        <a href="{{ route('products.show', ['category' => $product->category->slug ?: $product->category->id, 'product' => $product->slug]) }}">
            @include('components.lazy-image', [
                'src' => $product->images[0] ?? 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=400&h=300&fit=crop&crop=center',
                'alt' => $product->name,
                'class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300',
                'width' => '400',
                'height' => '300'
            ])
        </a>
        
        <!-- Badges -->
        <div class="absolute top-2 left-2 flex flex-col gap-1">
            @if($product->promotion && $product->promo_price > 0)
                <span class="bg-red-500 text-white px-2 py-1 text-xs font-semibold rounded">SALE</span>
            @endif
        </div>
        
        <!-- Stock Status -->
        <div class="absolute top-2 right-2">
            @if($product->quantity > 0)
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold backdrop-blur-sm border shadow-lg transition-all duration-300 bg-gradient-to-r from-green-500/15 to-emerald-500/15 text-green-200 border-green-400/40 hover:from-green-500/20 hover:to-emerald-500/20 hover:border-green-400/60 hover:shadow-green-500/20">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                    <span class="tracking-wide">In Stock</span>
                </div>
            @else
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold backdrop-blur-sm border shadow-lg transition-all duration-300 bg-gradient-to-r from-red-500/15 to-rose-500/15 text-red-200 border-red-400/40 hover:from-red-500/20 hover:to-rose-500/20 hover:border-red-400/60 hover:shadow-red-500/20">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                    </svg>
                    <span class="tracking-wide">Out of Stock</span>
                </div>
            @endif
        </div>
    </div>
    
    <div class="p-6">
        <div class="mb-2">
            <span class="text-xs text-primary-400 font-medium">{{ $product->category->name }}</span>
        </div>
        
        <h3 class="text-lg font-semibold text-white mb-2">
            <a href="{{ route('products.show', ['category' => $product->category->slug ?: $product->category->id, 'product' => $product->slug]) }}" 
               class="hover:text-primary-400 transition-colors line-clamp-2">
                {{ $product->name }}
            </a>
        </h3>
        
        <!-- Product Status Badge -->
        @if($product->status)
            <div class="mb-3">
                @include('components.product-status-badge', ['product' => $product])
            </div>
        @endif
        
        <!-- Price -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                @if($product->promotion && $product->promo_price > 0 && $product->promo_price < $product->price)
                    <span class="text-sm text-gray-500 line-through">LKR {{ number_format($product->price, 2) }}</span>
                    <span class="text-lg font-bold text-[#f59e0b]">LKR {{ number_format($product->promo_price, 2) }}</span>
                @else
                    @if($product->price > 0)
                        <span class="text-lg font-bold text-white">LKR {{ number_format($product->price, 2) }}</span>
                    @else
                        <span class="text-lg font-bold text-[#f59e0b]">Contact for Price</span>
                    @endif
                @endif
            </div>
        </div>

        <!-- Payment Method Badges -->
        @include('components.payment-badges')
        
        <!-- Action Button -->
        <div class="flex items-center justify-between mt-4">
            <div></div>
            @if($product->can_add_to_cart)
                <button class="btn-primary px-4 py-2 text-sm group-hover:bg-primary-600 transition-colors" 
                        onclick="addToCartFromCategory({{ $product->id }})">
                    Add to Cart
                </button>
            @else
                <button class="btn-secondary px-4 py-2 text-sm opacity-50 cursor-not-allowed" 
                        disabled title="{{ $product->cart_restriction_reason }}">
                    {{ $product->cart_restriction_reason ?: 'Unavailable' }}
                </button>
            @endif
        </div>
    </div>
</div>
