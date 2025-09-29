

<?php $__env->startSection('title', 'Invoice #' . $order->order_number . ' - MSK COMPUTERS'); ?>

<?php $__env->startSection('content'); ?>
<!-- Invoice Document -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden print-break-inside-avoid">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-[#f59e0b] to-[#d97706] p-8">
                <div class="flex justify-between items-start">
                    <div>
                        <img src="<?php echo e(asset('msk-computers-logo-color.png')); ?>" alt="MSK Computers" class="h-12 mb-4">
                        <h1 class="text-3xl font-bold text-white">INVOICE</h1>
                        <p class="text-orange-100">Invoice #<?php echo e($order->order_number); ?></p>
                    </div>
                    <div class="text-right text-white">
                        <h2 class="text-xl font-semibold mb-2">MSK COMPUTERS</h2>
                        <p class="text-orange-100">Your Trusted IT Partner</p>
                        <p class="text-orange-100">Sri Lanka's Leading Computer Store</p>
                    </div>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <!-- Bill To -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Bill To:</h3>
                        <div class="text-gray-800">
                            <p class="font-semibold text-gray-900"><?php echo e($order->customer_name); ?></p>
                            <p class="text-gray-800"><?php echo e($order->customer_email); ?></p>
                            <?php if($order->customer_phone): ?>
                                <p class="text-gray-800"><?php echo e($order->customer_phone); ?></p>
                            <?php endif; ?>
                            <?php if($order->billing_address_line_1): ?>
                                <p class="mt-2 text-gray-800">
                                    <?php echo e($order->billing_address_line_1); ?><br>
                                    <?php if($order->billing_address_line_2): ?>
                                        <?php echo e($order->billing_address_line_2); ?><br>
                                    <?php endif; ?>
                                    <?php echo e($order->billing_city); ?>, <?php echo e($order->billing_state); ?><br>
                                    <?php echo e($order->billing_postal_code); ?>, <?php echo e($order->billing_country); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Invoice Info -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Invoice Information:</h3>
                        <div class="text-gray-800 space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-800">Invoice Date:</span>
                                <span class="font-medium text-gray-900"><?php echo e($order->created_at->format('M d, Y')); ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-800">Order Status:</span>
                                <span class="font-medium capitalize 
                                    <?php echo e($order->status === 'delivered' ? 'text-green-600' : 
                                       ($order->status === 'cancelled' ? 'text-red-600' : 'text-blue-600')); ?>">
                                    <?php echo e(ucfirst($order->status)); ?>

                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-800">Payment Status:</span>
                                <span class="font-medium capitalize
                                    <?php echo e($order->payment_status === 'paid' ? 'text-green-600' : 
                                       ($order->payment_status === 'failed' ? 'text-red-600' : 'text-yellow-600')); ?>">
                                    <?php echo e(ucfirst(str_replace('_', ' ', $order->payment_status))); ?>

                                </span>
                            </div>
                            <?php if($order->payment_method): ?>
                                <div class="flex justify-between">
                                    <span class="text-gray-800">Payment Method:</span>
                                    <span class="font-medium text-gray-900"><?php echo e(ucfirst($order->payment_method)); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Items:</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-300 px-4 py-3 text-left text-sm font-semibold text-gray-800">Item</th>
                                    <th class="border border-gray-300 px-4 py-3 text-center text-sm font-semibold text-gray-800">Qty</th>
                                    <th class="border border-gray-300 px-4 py-3 text-right text-sm font-semibold text-gray-800">Unit Price</th>
                                    <th class="border border-gray-300 px-4 py-3 text-right text-sm font-semibold text-gray-800">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="hover:bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-3">
                                            <div class="font-medium text-gray-900"><?php echo e($item->product_name); ?></div>
                                            <?php if($item->product_code): ?>
                                                <div class="text-sm text-gray-600">Code: <?php echo e($item->product_code); ?></div>
                                            <?php elseif($item->product_sku): ?>
                                                <div class="text-sm text-gray-600">SKU: <?php echo e($item->product_sku); ?></div>
                                            <?php endif; ?>
                                        </td>
                                        <td class="border border-gray-300 px-4 py-3 text-center text-gray-900 font-medium"><?php echo e($item->quantity); ?></td>
                                        <td class="border border-gray-300 px-4 py-3 text-right text-gray-900 font-medium">LKR <?php echo e(number_format($item->unit_price, 2)); ?></td>
                                        <td class="border border-gray-300 px-4 py-3 text-right font-bold text-gray-900">LKR <?php echo e(number_format($item->total_price, 2)); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="flex justify-end">
                    <div class="w-full md:w-1/2">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Order Summary</h3>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between text-gray-800">
                                    <span>Subtotal:</span>
                                    <span class="font-medium">LKR <?php echo e(number_format($order->subtotal, 2)); ?></span>
                                </div>
                                <?php if($order->tax_amount > 0): ?>
                                    <div class="flex justify-between text-gray-800">
                                        <span>Tax:</span>
                                        <span class="font-medium">LKR <?php echo e(number_format($order->tax_amount, 2)); ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if($order->shipping_cost > 0): ?>
                                    <div class="flex justify-between text-gray-800">
                                        <span>Shipping:</span>
                                        <span class="font-medium">LKR <?php echo e(number_format($order->shipping_cost, 2)); ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if($order->discount_amount > 0): ?>
                                    <div class="flex justify-between text-green-700">
                                        <span>Discount:</span>
                                        <span class="font-medium">-LKR <?php echo e(number_format($order->discount_amount, 2)); ?></span>
                                    </div>
                                <?php endif; ?>
                                <hr class="my-2 border-gray-300">
                                <div class="flex justify-between text-lg font-bold text-gray-900">
                                    <span>Total Amount:</span>
                                    <span>LKR <?php echo e(number_format($order->total_amount, 2)); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if($order->notes): ?>
                    <!-- Order Notes -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Notes:</h3>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <p class="text-gray-700"><?php echo e($order->notes); ?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Shipping Information -->
                <?php if($order->shipping_address_line_1): ?>
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Shipping Address:</h3>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                            <p class="text-gray-700">
                                <?php echo e($order->shipping_address_line_1); ?><br>
                                <?php if($order->shipping_address_line_2): ?>
                                    <?php echo e($order->shipping_address_line_2); ?><br>
                                <?php endif; ?>
                                <?php echo e($order->shipping_city); ?>, <?php echo e($order->shipping_state); ?><br>
                                <?php echo e($order->shipping_postal_code); ?>, <?php echo e($order->shipping_country); ?>

                            </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Company Information -->
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-4">Company Information:</h4>
                            <div class="text-sm text-gray-800 space-y-2">
                                <div class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-[#f59e0b] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-6m-2 0h6m-6 0H5m14 0v-5H9v5"/>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-900">MSK COMPUTERS</p>
                                        <p class="text-gray-700">Your Trusted IT Partner</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-[#f59e0b] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div>
                                        <p class="text-gray-800">No.296/3D, Delpe Junction</p>
                                        <p class="text-gray-800">Ragama, Sri Lanka</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-[#f59e0b] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <div>
                                        <p class="text-gray-800">0112 95 9005</p>
                                        <p class="text-gray-800">0777 50 69 39 / 071 53 21 750</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-[#f59e0b] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <p class="text-gray-800">info@mskcomputers.lk</p>
                                </div>
                                
                                <div class="flex items-start space-x-2">
                                    <svg class="w-4 h-4 text-[#f59e0b] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"/>
                                    </svg>
                                    <p class="text-gray-800">www.mskcomputers.lk</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-4">Terms & Conditions:</h4>
                            <div class="text-xs text-gray-700 space-y-2">
                                <p>• Thank you for choosing MSK Computers - Your Trusted IT Partner</p>
                                <p>• All sales are final unless otherwise specified</p>
                                <p>• Products come with manufacturer warranty</p>
                                <p>• For technical support and inquiries, please contact us</p>
                                <p>• Sri Lanka's leading computer specialist since establishment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Action Buttons (Hidden in print) -->
<div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center no-print">
    <button onclick="window.print()" 
            class="inline-flex items-center px-8 py-4 bg-[#f59e0b] text-white rounded-lg hover:bg-[#d97706] transition-colors font-bold shadow-lg text-lg">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
        </svg>
        🖨️ Print/Save as PDF
    </button>
    
    <a href="<?php echo e(route('orders.track')); ?>" 
       class="inline-flex items-center px-6 py-3 bg-gray-700 text-white rounded-lg hover:bg-gray-800 transition-colors font-medium shadow-lg">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Track Order
    </a>
    
    <a href="<?php echo e(route('home')); ?>" 
       class="inline-flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100 transition-colors font-medium shadow-lg">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
        Back to Home
    </a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.invoice', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhanushka\Desktop\MSK\MSKMSV3\resources\views/orders/invoice.blade.php ENDPATH**/ ?>