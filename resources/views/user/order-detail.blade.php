@extends('layouts.app')

@section('title', 'Order Details - ' . $order->order_number . ' - MSK COMPUTERS')
@section('description', 'View detailed information about your MSK Computers order including items, shipping, and payment details.')

@section('content')
<div class="min-h-screen bg-[#0f0f0f] py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Page Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2">Order Details</h1>
                <p class="text-gray-400">Order #{{ $order->order_number }}</p>
            </div>
            <a href="{{ route('user.orders') }}" 
               class="inline-flex items-center text-[#f59e0b] hover:text-[#d97706] transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Orders
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Order Status & Summary -->
                <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-800">
                        <h2 class="text-xl font-semibold text-white">Order Summary</h2>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <div class="text-center p-4 bg-gray-800/30 rounded-lg">
                                <div class="text-2xl font-bold text-white mb-1">{{ $order->formatted_total }}</div>
                                <div class="text-sm text-gray-400">Total Amount</div>
                            </div>
                            <div class="text-center p-4 bg-gray-800/30 rounded-lg">
                                <div class="text-lg font-semibold text-white mb-1">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $order->status_badge }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </div>
                                <div class="text-sm text-gray-400">Order Status</div>
                            </div>
                            <div class="text-center p-4 bg-gray-800/30 rounded-lg">
                                <div class="text-lg font-semibold text-white mb-1">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $order->payment_status_badge }}">
                                        {{ ucfirst(str_replace('_', ' ', $order->payment_status)) }}
                                    </span>
                                </div>
                                <div class="text-sm text-gray-400">Payment Status</div>
                            </div>
                            <div class="text-center p-4 bg-gray-800/30 rounded-lg">
                                <div class="text-lg font-semibold text-white mb-1">{{ $order->orderItems->count() }}</div>
                                <div class="text-sm text-gray-400">{{ Str::plural('Item', $order->orderItems->count()) }}</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm">
                            <div>
                                <h3 class="font-medium text-white mb-2">Order Information</h3>
                                <div class="space-y-1 text-gray-400">
                                    <div><span class="text-gray-500">Order Date:</span> {{ $order->created_at->format('M d, Y \a\t g:i A') }}</div>
                                    <div><span class="text-gray-500">Payment Method:</span> {{ ucfirst($order->payment_method) }}</div>
                                    @if($order->payment_reference)
                                        <div><span class="text-gray-500">Payment Reference:</span> {{ $order->payment_reference }}</div>
                                    @endif
                                    @if($order->tracking_number)
                                        <div><span class="text-gray-500">Tracking Number:</span> {{ $order->tracking_number }}</div>
                                    @endif
                                    @if($order->courier_service)
                                        <div><span class="text-gray-500">Courier:</span> {{ $order->courier_service }}</div>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <h3 class="font-medium text-white mb-2">Timeline</h3>
                                <div class="space-y-1 text-gray-400">
                                    <div><span class="text-gray-500">Ordered:</span> {{ $order->created_at->format('M d, Y g:i A') }}</div>
                                    @if($order->shipped_at)
                                        <div><span class="text-gray-500">Shipped:</span> {{ $order->shipped_at->format('M d, Y g:i A') }}</div>
                                    @endif
                                    @if($order->delivered_at)
                                        <div><span class="text-gray-500">Delivered:</span> {{ $order->delivered_at->format('M d, Y g:i A') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-800">
                        <h2 class="text-xl font-semibold text-white">Order Items</h2>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            @foreach($order->orderItems as $item)
                                <div class="flex items-center space-x-4 p-4 bg-gray-800/20 rounded-lg">
                                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center">
                                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-medium text-white">{{ $item->product_name }}</h3>
                                        @if($item->product_sku)
                                            <p class="text-sm text-gray-400">SKU: {{ $item->product_sku }}</p>
                                        @endif
                                        <div class="flex items-center space-x-4 mt-2 text-sm">
                                            <span class="text-gray-400">Qty: {{ $item->quantity }}</span>
                                            <span class="text-gray-400">Unit Price: {{ $item->formatted_unit_price }}</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-lg font-semibold text-white">{{ $item->formatted_total_price }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Order Totals -->
                        <div class="mt-6 pt-6 border-t border-gray-800">
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Subtotal:</span>
                                    <span class="text-white">{{ $order->formatted_subtotal }}</span>
                                </div>
                                @if($order->discount_amount > 0)
                                    <div class="flex justify-between">
                                        <span class="text-gray-400">Discount:</span>
                                        <span class="text-green-400">-{{ $order->formatted_discount }}</span>
                                    </div>
                                @endif
                                @if($order->tax_amount > 0)
                                    <div class="flex justify-between">
                                        <span class="text-gray-400">Tax:</span>
                                        <span class="text-white">{{ $order->formatted_tax }}</span>
                                    </div>
                                @endif
                                @if($order->shipping_cost > 0)
                                    <div class="flex justify-between">
                                        <span class="text-gray-400">Shipping:</span>
                                        <span class="text-white">{{ $order->formatted_shipping }}</span>
                                    </div>
                                @endif
                                <div class="flex justify-between pt-2 border-t border-gray-700">
                                    <span class="font-semibold text-white">Total:</span>
                                    <span class="font-semibold text-white text-lg">{{ $order->formatted_total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Information -->
                @if($order->transactions->count() > 0)
                    <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-800">
                            <h2 class="text-xl font-semibold text-white">Payment History</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                @foreach($order->transactions as $transaction)
                                    <div class="flex items-center justify-between p-4 bg-gray-800/20 rounded-lg">
                                        <div>
                                            <div class="font-medium text-white">{{ ucfirst($transaction->payment_method) }}</div>
                                            <div class="text-sm text-gray-400">{{ $transaction->transaction_id }}</div>
                                            @if($transaction->completed_at)
                                                <div class="text-xs text-gray-500">{{ $transaction->completed_at->format('M d, Y g:i A') }}</div>
                                            @endif
                                        </div>
                                        <div class="text-right">
                                            <div class="font-semibold text-white">{{ $transaction->currency }} {{ number_format($transaction->amount, 2) }}</div>
                                            <div class="text-sm">
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                                    {{ $transaction->status === 'completed' ? 'bg-green-100 text-green-800' : 
                                                       ($transaction->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                                    {{ ucfirst($transaction->status) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                
                <!-- Customer Information -->
                <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-800">
                        <h2 class="text-lg font-semibold text-white">Customer Information</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="font-medium text-white mb-2">Contact Details</h3>
                            <div class="space-y-1 text-sm text-gray-400">
                                <div>{{ $order->customer_name }}</div>
                                <div>{{ $order->customer_email }}</div>
                                @if($order->customer_phone)
                                    <div>{{ $order->customer_phone }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping Address -->
                @if($order->shipping_address_line_1)
                    <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-800">
                            <h2 class="text-lg font-semibold text-white">Shipping Address</h2>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-400 space-y-1">
                                <div>{{ $order->shipping_address_line_1 }}</div>
                                @if($order->shipping_address_line_2)
                                    <div>{{ $order->shipping_address_line_2 }}</div>
                                @endif
                                <div>{{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_postal_code }}</div>
                                <div>{{ $order->shipping_country }}</div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Billing Address -->
                @if($order->billing_address_line_1)
                    <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-800">
                            <h2 class="text-lg font-semibold text-white">Billing Address</h2>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-400 space-y-1">
                                <div>{{ $order->billing_address_line_1 }}</div>
                                @if($order->billing_address_line_2)
                                    <div>{{ $order->billing_address_line_2 }}</div>
                                @endif
                                <div>{{ $order->billing_city }}, {{ $order->billing_state }} {{ $order->billing_postal_code }}</div>
                                <div>{{ $order->billing_country }}</div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Order Actions -->
                <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-800">
                        <h2 class="text-lg font-semibold text-white">Actions</h2>
                    </div>
                    <div class="p-6 space-y-3">
                        <a href="{{ route('orders.invoice', $order->order_number) }}" 
                           class="w-full inline-flex items-center justify-center px-4 py-2 bg-[#f59e0b] text-black rounded-lg hover:bg-[#d97706] transition-colors font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Download Invoice
                        </a>

                        @if($order->status === 'delivered')
                            <form action="{{ route('user.orders.reorder', $order) }}" method="POST" class="w-full">
                                @csrf
                                <button type="submit" 
                                        class="w-full inline-flex items-center justify-center px-4 py-2 border border-gray-700 text-gray-300 rounded-lg hover:bg-gray-800 transition-colors font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                    </svg>
                                    Reorder Items
                                </button>
                            </form>
                        @endif

                        @if($order->canBeCancelled())
                            <form action="{{ route('user.orders.cancel', $order) }}" method="POST" class="w-full">
                                @csrf
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to cancel this order?')"
                                        class="w-full inline-flex items-center justify-center px-4 py-2 border border-red-600 text-red-400 rounded-lg hover:bg-red-600 hover:text-white transition-colors font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                    Cancel Order
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

                <!-- Order Notes -->
                @if($order->notes)
                    <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-800">
                            <h2 class="text-lg font-semibold text-white">Order Notes</h2>
                        </div>
                        <div class="p-6">
                            <p class="text-sm text-gray-400">{{ $order->notes }}</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
