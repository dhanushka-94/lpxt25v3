

<?php $__env->startSection('title', 'Order Statistics'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-8">
    
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <div class="flex items-center space-x-3 mb-2">
                <a href="<?php echo e(route('admin.orders.index')); ?>" 
                   class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </a>
                <h1 class="text-3xl font-bold text-white">Order Statistics</h1>
            </div>
            <p class="text-gray-400">Comprehensive analytics and insights for order management</p>
        </div>
        
        <div class="flex items-center space-x-4">
            <!-- Export Button -->
            <button onclick="exportStatistics()" 
                    class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Export Report
            </button>
            
            <!-- Refresh Button -->
            <button onclick="window.location.reload()" 
                    class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Refresh
            </button>
        </div>
    </div>

    <!-- Main Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Today's Orders -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400">Today's Orders</p>
                    <p class="text-3xl font-bold text-white"><?php echo e(number_format($stats['today_orders'])); ?></p>
                    <p class="text-sm text-blue-400">New orders today</p>
                </div>
                <div class="p-3 bg-blue-500/20 rounded-lg">
                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Today's Revenue -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400">Today's Revenue</p>
                    <p class="text-3xl font-bold text-white">LKR <?php echo e(number_format($stats['today_revenue'], 2)); ?></p>
                    <p class="text-sm text-green-400">From paid orders</p>
                </div>
                <div class="p-3 bg-green-500/20 rounded-lg">
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pending Orders -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400">Pending Orders</p>
                    <p class="text-3xl font-bold text-white"><?php echo e(number_format($stats['pending_orders'])); ?></p>
                    <p class="text-sm text-yellow-400">Require attention</p>
                </div>
                <div class="p-3 bg-yellow-500/20 rounded-lg">
                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400">Total Revenue</p>
                    <p class="text-3xl font-bold text-white">LKR <?php echo e(number_format($stats['total_revenue'], 2)); ?></p>
                    <p class="text-sm text-purple-400">All time</p>
                </div>
                <div class="p-3 bg-purple-500/20 rounded-lg">
                    <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Status Breakdown -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Processing Orders -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400">Processing Orders</p>
                    <p class="text-2xl font-bold text-white"><?php echo e(number_format($stats['processing_orders'])); ?></p>
                    <a href="<?php echo e(route('admin.orders.index', ['status' => 'processing'])); ?>" 
                       class="text-sm text-blue-400 hover:text-blue-300 transition-colors">View orders →</a>
                </div>
                <div class="p-3 bg-blue-500/20 rounded-lg">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Shipped Orders -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400">Shipped Orders</p>
                    <p class="text-2xl font-bold text-white"><?php echo e(number_format($stats['shipped_orders'])); ?></p>
                    <a href="<?php echo e(route('admin.orders.index', ['status' => 'shipped'])); ?>" 
                       class="text-sm text-green-400 hover:text-green-300 transition-colors">View orders →</a>
                </div>
                <div class="p-3 bg-green-500/20 rounded-lg">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
            <h3 class="text-lg font-medium text-white mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <a href="<?php echo e(route('admin.orders.index', ['status' => 'pending'])); ?>" 
                   class="flex items-center justify-between p-2 bg-yellow-500/10 border border-yellow-500/20 rounded-lg hover:bg-yellow-500/20 transition-colors">
                    <span class="text-yellow-400 text-sm">⏰ Review Pending Orders</span>
                    <span class="text-yellow-400 font-medium"><?php echo e($stats['pending_orders']); ?></span>
                </a>
                
                <a href="<?php echo e(route('admin.orders.index', ['payment_status' => 'pending'])); ?>" 
                   class="flex items-center justify-between p-2 bg-orange-500/10 border border-orange-500/20 rounded-lg hover:bg-orange-500/20 transition-colors">
                    <span class="text-orange-400 text-sm">💳 Pending Payments</span>
                    <span class="text-orange-400 font-medium">Check</span>
                </a>
                
                <a href="<?php echo e(route('admin.orders.create')); ?>" 
                   class="flex items-center justify-between p-2 bg-blue-500/10 border border-blue-500/20 rounded-lg hover:bg-blue-500/20 transition-colors">
                    <span class="text-blue-400 text-sm">➕ Create New Order</span>
                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-gradient-to-br from-[#1a1a1c] to-[#2a2a2c] rounded-xl border border-gray-800 p-6">
        <h3 class="text-lg font-medium text-white mb-6">📊 Statistics Overview</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-400"><?php echo e(number_format($stats['today_orders'])); ?></div>
                <div class="text-sm text-gray-400">Orders Today</div>
            </div>
            
            <div class="text-center">
                <div class="text-2xl font-bold text-green-400">LKR <?php echo e(number_format($stats['today_revenue'], 0)); ?></div>
                <div class="text-sm text-gray-400">Revenue Today</div>
            </div>
            
            <div class="text-center">
                <div class="text-2xl font-bold text-yellow-400"><?php echo e(number_format($stats['pending_orders'])); ?></div>
                <div class="text-sm text-gray-400">Pending Orders</div>
            </div>
            
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-400">LKR <?php echo e(number_format($stats['total_revenue'], 0)); ?></div>
                <div class="text-sm text-gray-400">Total Revenue</div>
            </div>
        </div>
    </div>
</div>

<script>
function exportStatistics() {
    // Create a simple CSV export
    const data = [
        ['Metric', 'Value'],
        ['Today Orders', '<?php echo e($stats["today_orders"]); ?>'],
        ['Today Revenue', 'LKR <?php echo e(number_format($stats["today_revenue"], 2)); ?>'],
        ['Pending Orders', '<?php echo e($stats["pending_orders"]); ?>'],
        ['Processing Orders', '<?php echo e($stats["processing_orders"]); ?>'],
        ['Shipped Orders', '<?php echo e($stats["shipped_orders"]); ?>'],
        ['Total Revenue', 'LKR <?php echo e(number_format($stats["total_revenue"], 2)); ?>']
    ];
    
    const csv = data.map(row => row.join(',')).join('\n');
    const blob = new Blob([csv], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.setAttribute('hidden', '');
    a.setAttribute('href', url);
    a.setAttribute('download', 'order-statistics-' + new Date().toISOString().split('T')[0] + '.csv');
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhanushka\Desktop\MSK\MSKMSV3\resources\views/admin/orders/statistics.blade.php ENDPATH**/ ?>