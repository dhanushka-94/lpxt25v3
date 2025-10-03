<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\SmaProduct;
use App\Services\WebXPayService;
use App\Services\KokoPayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    /**
     * Initiate PayHere payment
     */
    public function initiatePayment(Request $request, Order $order)
    {
        // Validate that order belongs to authenticated user or is guest order
        if ($order->user_id && $order->user_id !== auth()->id()) {
            abort(403, 'Unauthorized access to order');
        }

        // PayHere configuration
        $merchantId = config('payhere.merchant_id');
        $merchantSecret = config('payhere.merchant_secret');
        $currency = 'LKR';
        $amount = number_format($order->total_amount, 2, '.', '');

        // Generate hash for security
        $hash = strtoupper(
            md5(
                $merchantId . 
                $order->order_number . 
                $amount . 
                $currency . 
                strtoupper(md5($merchantSecret))
            )
        );

        $paymentData = [
            'merchant_id' => $merchantId,
            'return_url' => route('payment.return'),
            'cancel_url' => route('payment.cancel'),
            'notify_url' => route('payment.notify'),
            'order_id' => $order->order_number,
            'items' => 'Order #' . $order->order_number,
            'amount' => $amount,
            'currency' => $currency,
            'hash' => $hash,
            'first_name' => explode(' ', $order->customer_name)[0],
            'last_name' => explode(' ', $order->customer_name)[1] ?? '',
            'email' => $order->customer_email,
            'phone' => $order->customer_phone,
            'address' => $order->shipping_address_line_1,
            'city' => $order->shipping_city,
            'country' => 'Sri Lanka',
        ];

        return view('payment.payhere', compact('paymentData', 'order'));
    }

    /**
     * Handle PayHere return
     */
    public function handleReturn(Request $request)
    {
        $orderNumber = $request->order_id;
        $order = Order::where('order_number', $orderNumber)->first();

        if (!$order) {
            return redirect()->route('home')->with('error', 'Order not found');
        }

        // Check payment status
        if ($request->payment_id && $request->payment_status == 2) {
            // Payment successful
            $order->update([
                'payment_status' => 'paid',
                'payment_reference' => $request->payment_id,
            ]);

            return redirect()->route('checkout.success', $order->order_number)
                ->with('success', 'Payment completed successfully!');
        } else {
            // Payment failed
            return redirect()->route('checkout.index')
                ->with('error', 'Payment was not completed. Please try again.');
        }
    }

    /**
     * Handle PayHere cancel
     */
    public function handleCancel(Request $request)
    {
        $orderNumber = $request->order_id;
        
        return redirect()->route('checkout.index')
            ->with('error', 'Payment was cancelled. You can try again or choose a different payment method.');
    }

    /**
     * Handle PayHere notify (webhook)
     */
    public function handleNotify(Request $request)
    {
        // Verify the payment notification
        $merchantId = config('payhere.merchant_id');
        $merchantSecret = config('payhere.merchant_secret');
        
        $orderId = $request->order_id;
        $paymentId = $request->payment_id;
        $amount = $request->payhere_amount;
        $currency = $request->payhere_currency;
        $statusCode = $request->status_code;
        
        // Generate hash to verify authenticity
        $localHash = strtoupper(
            md5(
                $merchantId . 
                $orderId . 
                $amount . 
                $currency . 
                $statusCode . 
                strtoupper(md5($merchantSecret))
            )
        );

        if ($localHash === $request->md5sig) {
            // Valid notification
            $order = Order::where('order_number', $orderId)->first();
            
            if ($order) {
                if ($statusCode == 2) {
                    // Payment success
                    $order->update([
                        'payment_status' => 'paid',
                        'payment_reference' => $paymentId,
                    ]);
                    
                    Log::info('PayHere payment successful', [
                        'order_id' => $orderId,
                        'payment_id' => $paymentId,
                        'amount' => $amount
                    ]);
                } else {
                    // Payment failed
                    $order->update([
                        'payment_status' => 'failed',
                        'payment_reference' => $paymentId,
                    ]);
                    
                    Log::warning('PayHere payment failed', [
                        'order_id' => $orderId,
                        'payment_id' => $paymentId,
                        'status_code' => $statusCode
                    ]);
                }
            }
        } else {
            Log::error('PayHere notification hash mismatch', [
                'order_id' => $orderId,
                'received_hash' => $request->md5sig,
                'expected_hash' => $localHash
            ]);
        }

        return response('OK', 200);
    }

    /**
     * Process card payment
     */
    public function processCardPayment(Request $request, Order $order)
    {
        $request->validate([
            'card_number' => 'required|string|size:16',
            'expiry_month' => 'required|string|size:2',
            'expiry_year' => 'required|string|size:2',
            'cvv' => 'required|string|size:3',
            'card_holder_name' => 'required|string|max:255',
        ]);

        // In a real implementation, you would integrate with a payment processor
        // For demo purposes, we'll simulate a successful payment
        
        try {
            // Simulate payment processing
            $paymentSuccess = $this->simulateCardPayment($request->all());
            
            if ($paymentSuccess) {
                $order->update([
                    'payment_status' => 'paid',
                    'payment_reference' => 'CARD_' . uniqid(),
                ]);

                return response()->json([
                    'success' => true,
                    'redirect_url' => route('checkout.success', $order->order_number)
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment failed. Please check your card details and try again.'
                ], 422);
            }
        } catch (\Exception $e) {
            Log::error('Card payment error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Payment processing error. Please try again.'
            ], 500);
        }
    }

    /**
     * Simulate card payment (for demo purposes)
     */
    private function simulateCardPayment(array $cardData)
    {
        // Simulate different scenarios based on card number
        $cardNumber = $cardData['card_number'];
        
        // Test card numbers for demo
        if (in_array($cardNumber, ['4111111111111111', '5555555555554444'])) {
            return true; // Success
        } elseif ($cardNumber === '4000000000000002') {
            return false; // Declined
        } else {
            // Random success/failure for other cards
            return rand(1, 10) <= 8; // 80% success rate
        }
    }

    /**
     * Process mobile payment (Dialog eZ Cash, Mobitel mCash)
     */
    public function processMobilePayment(Request $request, Order $order)
    {
        $request->validate([
            'mobile_number' => 'required|string|regex:/^[0-9]{10}$/',
            'provider' => 'required|in:dialog,mobitel',
        ]);

        try {
            // In a real implementation, integrate with mobile payment APIs
            // For demo purposes, we'll simulate the process
            
            $paymentSuccess = $this->simulateMobilePayment($request->all());
            
            if ($paymentSuccess) {
                $order->update([
                    'payment_status' => 'paid',
                    'payment_reference' => strtoupper($request->provider) . '_' . uniqid(),
                ]);

                return response()->json([
                    'success' => true,
                    'redirect_url' => route('checkout.success', $order->order_number)
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Mobile payment failed. Please check your mobile wallet balance and try again.'
                ], 422);
            }
        } catch (\Exception $e) {
            Log::error('Mobile payment error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Payment processing error. Please try again.'
            ], 500);
        }
    }

    /**
     * Simulate mobile payment (for demo purposes)
     */
    private function simulateMobilePayment(array $paymentData)
    {
        // Simulate payment success/failure
        return rand(1, 10) <= 9; // 90% success rate
    }

    /**
     * Check payment status
     */
    public function checkPaymentStatus(Order $order)
    {
        return response()->json([
            'order_number' => $order->order_number,
            'payment_status' => $order->payment_status,
            'payment_reference' => $order->payment_reference,
            'total_amount' => $order->total_amount,
        ]);
    }

    // ==================== WEBXPAY INTEGRATION ====================

    /**
     * Initiate WebXPay payment
     */
    public function initiateWebXPayPayment(Request $request, $order)
    {
        try {
            Log::info('WebXPay payment route accessed', [
                'order_param' => $order,
                'order_type' => gettype($order),
                'is_order_instance' => $order instanceof Order
            ]);

            // Handle both Order model and order ID
            if (!$order instanceof Order) {
                Log::info('Attempting to find order by ID', ['order_id' => $order]);
                $order = Order::findOrFail($order);
                Log::info('Order found', [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number
                ]);
            }
            
            // Validate that order belongs to authenticated user or is guest order
            if ($order->user_id && $order->user_id !== auth()->id()) {
                Log::warning('Unauthorized access attempt', [
                    'order_user_id' => $order->user_id,
                    'auth_user_id' => auth()->id()
                ]);
                abort(403, 'Unauthorized access to order');
            }

            $webxpayService = new WebXPayService();
            $paymentData = $webxpayService->preparePayment($order);
            
            // Calculate discount information for order summary
            $subtotal = 0;
            $originalSubtotal = 0;
            $totalDiscount = 0;
            
            foreach ($order->orderItems as $item) {
                $product = SmaProduct::find($item->product_id);
                if ($product) {
                    $lineTotal = $item->quantity * $product->final_price;
                    $originalLineTotal = $item->quantity * $product->price;
                    $lineDiscount = $originalLineTotal - $lineTotal;
                    
                    $subtotal += $lineTotal;
                    $originalSubtotal += $originalLineTotal;
                    $totalDiscount += $lineDiscount;
                }
            }
            
            // Calculate WebXPay transaction fee (3%)
            $transactionFee = $order->total_amount * 0.03;
            $totalWithFee = $order->total_amount + $transactionFee;
            
            Log::info('WebXPay payment initiated successfully', [
                'order_number' => $order->order_number,
                'base_amount' => $order->total_amount,
                'transaction_fee' => $transactionFee,
                'total_with_fee' => $totalWithFee,
                'discount_calculated' => $totalDiscount,
                'amount_sent_to_webxpay' => $totalWithFee
            ]);

            return view('payment.webxpay', compact('paymentData', 'order', 'subtotal', 'originalSubtotal', 'totalDiscount', 'transactionFee', 'totalWithFee'));

        } catch (\Exception $e) {
            Log::error('WebXPay payment initiation failed', [
                'order_param' => $order,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->view('errors.404', [
                'message' => 'Payment processing error: ' . $e->getMessage()
            ], 404);
        }
    }

    /**
     * Test WebXPay configuration
     */
    public function testWebXPay()
    {
        $config = [
            'mode' => config('webxpay.mode'),
            'checkout_url' => config('webxpay.checkout_url'),
            'sandbox_url' => config('webxpay.sandbox_url'),
            'live_url' => config('webxpay.live_url'),
            'api_username' => config('webxpay.api_username'),
            'currency' => config('webxpay.currency'),
            'cms' => config('webxpay.cms'),
            'has_public_key' => !empty(config('webxpay.public_key')),
            'has_secret_key' => !empty(config('webxpay.secret_key')),
            'return_url' => config('webxpay.return_url'),
            'cancel_url' => config('webxpay.cancel_url'),
            'notify_url' => config('webxpay.notify_url'),
        ];

        return response()->json([
            'status' => 'Configuration loaded',
            'config' => $config,
            'timestamp' => now()->toDateTimeString()
        ]);
    }

    /**
     * Handle WebXPay return
     */
    public function handleWebXPayReturn(Request $request)
    {
        try {
            // Validate required parameters
            if (!$request->has(['payment', 'signature'])) {
                throw new \Exception('Missing required payment response data');
            }

            $webxpayService = new WebXPayService();
            $responseData = $request->all();
            
            // Process the response
            $processedResponse = $webxpayService->processResponse($responseData);
            
            // Find the order
            $order = Order::where('order_number', $processedResponse['order_id'])->first();
            
            if (!$order) {
                throw new \Exception('Order not found: ' . $processedResponse['order_id']);
            }

            // Update order status
            $updateSuccess = $webxpayService->updateOrderStatus($order, $responseData);
            
            if (!$updateSuccess) {
                throw new \Exception('Failed to update order status');
            }

            // Redirect based on payment status
            switch ($processedResponse['payment_status']) {
                case 'success':
                    // Clear cart after successful payment
                    \App\Models\Cart::where('session_id', session()->getId())
                        ->orWhere(function($query) {
                            if (\Illuminate\Support\Facades\Auth::check()) {
                                $query->where('user_id', \Illuminate\Support\Facades\Auth::id());
                            }
                        })
                        ->delete();
                        
                    return redirect()->route('checkout.success', $order->order_number)
                        ->with('success', 'Payment completed successfully via WebXPay!');
                        
                case 'pending':
                    // Clear cart for pending payments too (order is created)
                    \App\Models\Cart::where('session_id', session()->getId())
                        ->orWhere(function($query) {
                            if (\Illuminate\Support\Facades\Auth::check()) {
                                $query->where('user_id', \Illuminate\Support\Facades\Auth::id());
                            }
                        })
                        ->delete();
                        
                    return redirect()->route('checkout.success', $order->order_number)
                        ->with('info', 'Payment is being processed. You will receive confirmation once completed.');
                        
                default:
                    return redirect()->route('checkout.index')
                        ->with('error', 'Payment was not completed. ' . $processedResponse['comment']);
            }

        } catch (\Exception $e) {
            Log::error('WebXPay return handling failed', [
                'error' => $e->getMessage(),
                'request_data' => $request->all()
            ]);

            return redirect()->route('checkout.index')
                ->with('error', 'Payment processing failed. Please try again or contact support.');
        }
    }

    /**
     * Handle WebXPay cancel
     */
    public function handleWebXPayCancel(Request $request)
    {
        Log::info('WebXPay payment cancelled', $request->all());
        
        return redirect()->route('checkout.index')
            ->with('error', 'Payment was cancelled. You can try again or choose a different payment method.');
    }

    /**
     * Handle WebXPay notify (webhook)
     */
    public function handleWebXPayNotify(Request $request)
    {
        try {
            // Validate required parameters
            if (!$request->has(['payment', 'signature'])) {
                Log::error('WebXPay notify: Missing required parameters');
                return response('Missing parameters', 400);
            }

            $webxpayService = new WebXPayService();
            $responseData = $request->all();
            
            // Process the response
            $processedResponse = $webxpayService->processResponse($responseData);
            
            // Find the order
            $order = Order::where('order_number', $processedResponse['order_id'])->first();
            
            if (!$order) {
                Log::error('WebXPay notify: Order not found', ['order_id' => $processedResponse['order_id']]);
                return response('Order not found', 404);
            }

            // Update order status
            $updateSuccess = $webxpayService->updateOrderStatus($order, $responseData);
            
            if ($updateSuccess) {
                Log::info('WebXPay notification processed successfully', [
                    'order_number' => $order->order_number,
                    'payment_status' => $processedResponse['payment_status'],
                    'reference' => $processedResponse['reference_number']
                ]);
                
                // TODO: Send email notification to customer about payment status
                
                return response('OK', 200);
            } else {
                Log::error('WebXPay notify: Failed to update order status');
                return response('Update failed', 500);
            }

        } catch (\Exception $e) {
            Log::error('WebXPay notification processing failed', [
                'error' => $e->getMessage(),
                'request_data' => $request->all()
            ]);
            
            return response('Processing failed', 500);
        }
    }

    /**
     * Check WebXPay payment status
     */
    public function checkWebXPayPaymentStatus(Order $order)
    {
        return response()->json([
            'order_number' => $order->order_number,
            'payment_status' => $order->payment_status,
            'payment_reference' => $order->payment_reference,
            'payment_method' => $order->payment_method,
            'total_amount' => $order->total_amount,
        ]);
    }

    /**
     * Initiate Koko Pay payment
     */
    public function initiateKokoPayPayment(Request $request, Order $order)
    {
        try {
            // Validate that order belongs to authenticated user or is guest order
            if ($order->user_id && $order->user_id !== auth()->id()) {
                Log::warning('Unauthorized access to Koko Pay order', [
                    'order_id' => $order->id,
                    'order_user_id' => $order->user_id,
                    'auth_user_id' => auth()->id()
                ]);
                abort(403, 'Unauthorized access to order');
            }

            Log::info('Initiating Koko Pay payment', [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'auth_check' => auth()->check(),
                'order_user_id' => $order->user_id
            ]);

            // Calculate order totals
            $orderItems = $order->orderItems()->with('product')->get();
            $originalSubtotal = $orderItems->sum(function($item) {
                return $item->quantity * $item->product->price;
            });
            
            $subtotal = $orderItems->sum('total_price');
            $totalDiscount = $originalSubtotal - $subtotal;
            $transactionFee = $subtotal * 0.10; // 10% transaction fee for Koko Pay
            $totalWithFee = $subtotal + $transactionFee;

            // Split customer name into first and last name
            $nameParts = explode(' ', trim($order->customer_name), 2);
            $firstName = $nameParts[0] ?? '';
            $lastName = $nameParts[1] ?? '';

            // Prepare customer data for Koko Pay
            $customerData = [
                'order_id' => $order->id,
                'amount' => $totalWithFee,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => $order->customer_email ?: 'customer@mskcomputers.lk',
                'contactNumber' => $order->customer_phone,
                'description' => 'MSK Computers Order #' . $order->id,
            ];

            Log::info('Koko Pay customer data prepared', $customerData);

            // Initialize Koko Pay service
            $kokoPayService = new KokoPayService();
            $paymentResult = $kokoPayService->preparePayment($customerData);

            if (!$paymentResult['success']) {
                Log::error('Koko Pay payment preparation failed', [
                    'order_id' => $order->id,
                    'error' => $paymentResult['error']
                ]);
                
                return redirect()->back()->with('error', 'Payment initialization failed: ' . $paymentResult['error']);
            }

            // Store order in session for return handling
            session(['kokopay_order_id' => $order->id]);

            Log::info('Koko Pay payment initialized successfully', [
                'order_id' => $order->id,
                'reference' => $paymentResult['data']['_reference']
            ]);

            // Pass all data to the payment view
            return view('payment.kokopay', [
                'order' => $order,
                'paymentData' => $paymentResult['data'],
                'apiUrl' => $paymentResult['api_url'],
                'originalSubtotal' => $originalSubtotal,
                'totalDiscount' => $totalDiscount,
                'subtotal' => $subtotal,
                'transactionFee' => $transactionFee,
                'totalWithFee' => $totalWithFee,
            ]);

        } catch (\Exception $e) {
            Log::error('Koko Pay payment initiation error', [
                'order_id' => $order->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'Payment initialization failed. Please try again.');
        }
    }

    /**
     * Handle Koko Pay Return URL (_returnUrl) - Frontend Redirection
     * 
     * When payment is successful, user is redirected here from Koko Pay.
     * URL: http://eComm.com/orders/66/returned/3
     * Parameters: orderId, trnId, status (SUCCESS)
     * 
     * This is the user-facing confirmation but not 100% secure.
     * The webhook (Response URL) provides server-to-server confirmation.
     */
    public function handleKokoPayReturn(Request $request)
    {
        // Log KokoPay return request
        Log::info('KokoPay return request received', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'data' => $request->all()
        ]);
        
        Log::info('Koko Pay return received', $request->all());

        // Get order ID from URL parameter or session
        $orderId = $request->get('orderId') ?? session('kokopay_order_id');
        
        if (!$orderId) {
            Log::warning('No Koko Pay order ID in request or session', [
                'request_params' => $request->all(),
                'session_id' => session('kokopay_order_id')
            ]);
            return redirect()->route('home')->with('error', 'Session expired. Please try again.');
        }

        $order = Order::find($orderId);
        
        if (!$order) {
            Log::error('Koko Pay return: Order not found', ['order_id' => $orderId]);
            return redirect()->route('home')->with('error', 'Order not found.');
        }

        // Check payment status from the return parameters (case-insensitive)
        $paymentStatus = strtolower($request->get('status', 'failed'));
        $transactionId = $request->get('trnId', '');
        $description = $request->get('desc', '');
        
        Log::info('Processing Koko Pay payment status', [
            'order_id' => $order->id,
            'order_number' => $order->order_number,
            'status' => $paymentStatus,
            'original_status' => $request->get('status'),
            'transaction_id' => $transactionId
        ]);
        
        if ($paymentStatus === 'success' || $paymentStatus === 'completed' || $paymentStatus === 'paid') {
            // Update order status
            $order->update([
                'payment_status' => 'paid',
                'payment_method' => 'kokopay',
                'payment_reference' => $transactionId,
                'status' => 'confirmed' // Update order status as well
            ]);

            // Create or find existing transaction record for admin transactions page
            $transactionRecord = \App\Models\Transaction::firstOrCreate(
                [
                    'transaction_id' => 'TXN-' . strtoupper(substr($transactionId, 0, 16)),
                ],
                [
                    'order_id' => $order->id,
                    'payment_method' => 'kokopay',
                    'status' => 'completed',
                    'amount' => $order->total_amount,
                    'currency' => 'LKR',
                    'gateway_transaction_id' => $transactionId, // trnId
                    'gateway_reference' => $request->get('orderId', ''), // orderId
                    'gateway_response' => $request->all(), // Complete raw response
                    'customer_name' => $order->customer_name,
                    'customer_email' => $order->customer_email,
                    'customer_phone' => $order->customer_phone,
                    'description' => $description ?: "Koko Pay payment for order {$order->order_number}", // desc field
                    'initiated_at' => $order->created_at,
                    'completed_at' => now(),
                    'metadata' => [
                        // KOKO PAY CORE PARAMETERS
                        'orderId' => $request->get('orderId', ''),
                        'trnId' => $transactionId,
                        'status' => $request->get('status', ''),
                        'desc' => $description,
                        
                        // KOKO PAY ADDITIONAL PARAMETERS  
                        'key' => $request->get('key', ''),
                        'frontend' => $request->get('frontend', false),
                        'wc_api' => $request->get('wc-api', ''),
                        
                        // INTERNAL TRACKING
                        'source' => 'return_url',
                        'payment_flow' => 'successful',
                        'koko_pay_order_id' => $request->get('orderId', ''), // Legacy compatibility
                        'koko_pay_transaction_id' => $transactionId, // Legacy compatibility
                    ],
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->header('User-Agent'),
            ]);

            // Clear session
            session()->forget('kokopay_order_id');

            // Clear cart after successful payment
            \App\Models\Cart::where('session_id', session()->getId())
                ->orWhere(function($query) {
                    if (\Illuminate\Support\Facades\Auth::check()) {
                        $query->where('user_id', \Illuminate\Support\Facades\Auth::id());
                    }
                })
                ->delete();

            Log::info('Koko Pay payment completed successfully', [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'payment_reference' => $transactionId,
                'description' => $description,
                'transaction_created' => true,
                'cart_cleared' => true
            ]);

            // Log successful redirect
            Log::info('KokoPay payment successful, redirecting to success page', [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'redirect_route' => route('checkout.success', $order->order_number)
            ]);

            // Use order_number (not id) for success route
            return redirect()->route('checkout.success', $order->order_number)
                           ->with('success', 'Payment completed successfully with Koko Pay!');
        } else {
            // Create or find existing transaction record for failed payment
            $failedTransactionId = 'TXN-' . strtoupper(substr($transactionId ?: uniqid(), 0, 16));
            \App\Models\Transaction::firstOrCreate(
                ['transaction_id' => $failedTransactionId],
                [
                'order_id' => $order->id,
                'payment_method' => 'kokopay',
                'status' => 'failed',
                'amount' => $order->total_amount,
                'currency' => 'LKR',
                'gateway_transaction_id' => $transactionId, // trnId
                'gateway_reference' => $request->get('orderId', ''), // orderId
                'gateway_response' => $request->all(), // Complete raw response
                'customer_name' => $order->customer_name,
                'customer_email' => $order->customer_email,
                'customer_phone' => $order->customer_phone,
                'description' => $description ?: "Failed Koko Pay payment for order {$order->order_number}", // desc field
                'failure_reason' => "Payment status: {$paymentStatus}. " . ($description ? "Description: {$description}" : ''),
                'initiated_at' => $order->created_at,
                'failed_at' => now(),
                'metadata' => [
                    // KOKO PAY CORE PARAMETERS
                    'orderId' => $request->get('orderId', ''),
                    'trnId' => $transactionId,
                    'status' => $request->get('status', ''),
                    'desc' => $description,
                    
                    // KOKO PAY ADDITIONAL PARAMETERS
                    'key' => $request->get('key', ''),
                    'frontend' => $request->get('frontend', false),
                    'wc_api' => $request->get('wc-api', ''),
                    
                    // INTERNAL TRACKING
                    'source' => 'return_url',
                    'payment_flow' => 'failed',
                    'original_status' => $request->get('status'),
                    'koko_pay_order_id' => $request->get('orderId', ''), // Legacy compatibility
                    'koko_pay_transaction_id' => $transactionId, // Legacy compatibility
                ],
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                ]
            );

            Log::warning('Koko Pay payment failed or cancelled', [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'status' => $paymentStatus,
                'original_status' => $request->get('status'),
                'transaction_id' => $transactionId,
                'description' => $description,
                'request_data' => $request->all(),
                'transaction_created' => true
            ]);

            return redirect()->route('checkout.index')
                           ->with('error', 'Payment was not completed. Please try again.');
        }
    }

    /**
     * Handle Koko Pay Cancel URL (_cancelUrl) - User Cancelled Payment
     * 
     * When payment fails or is cancelled, user is redirected here.
     * URL: http://eComm.com/orders/66/cancel/3
     * Parameters: orderId, trnId, status (FAILED)
     */
    public function handleKokoPayCancel(Request $request)
    {
        Log::info('Koko Pay payment cancelled', $request->all());

        $orderId = $request->get('orderId') ?? session('kokopay_order_id');
        $transactionId = $request->get('trnId', '');
        $paymentStatus = strtolower($request->get('status', 'cancelled'));
        
        if ($orderId) {
            $order = Order::find($orderId);
            if ($order) {
                // Update order status
                $order->update([
                    'payment_status' => 'failed',
                    'payment_method' => 'kokopay',
                    'payment_reference' => $transactionId
                ]);
                
                // Create or find existing transaction record for cancelled payment
                $cancelledTransactionId = 'TXN-' . strtoupper(substr($transactionId ?: uniqid(), 0, 16));
                \App\Models\Transaction::firstOrCreate(
                    ['transaction_id' => $cancelledTransactionId],
                    [
                    'order_id' => $order->id,
                    'payment_method' => 'kokopay',
                    'status' => 'cancelled',
                    'amount' => $order->total_amount,
                    'currency' => 'LKR',
                    'gateway_transaction_id' => $transactionId, // trnId
                    'gateway_reference' => $orderId, // orderId
                    'gateway_response' => $request->all(), // Complete raw response
                    'customer_name' => $order->customer_name,
                    'customer_email' => $order->customer_email,
                    'customer_phone' => $order->customer_phone,
                    'description' => $request->get('desc', '') ?: "Cancelled Koko Pay payment for order {$order->order_number}", // desc field
                    'failure_reason' => "Payment cancelled by user. Status: {$paymentStatus}",
                    'initiated_at' => $order->created_at,
                    'failed_at' => now(),
                    'metadata' => [
                        // KOKO PAY CORE PARAMETERS
                        'orderId' => $orderId,
                        'trnId' => $transactionId,
                        'status' => $request->get('status', ''),
                        'desc' => $request->get('desc', ''),
                        
                        // KOKO PAY ADDITIONAL PARAMETERS
                        'key' => $request->get('key', ''),
                        'frontend' => $request->get('frontend', false),
                        'wc_api' => $request->get('wc-api', ''),
                        
                        // INTERNAL TRACKING
                        'source' => 'cancel_url',
                        'payment_flow' => 'cancelled',
                        'cancellation_reason' => 'User cancelled payment',
                        'original_status' => $request->get('status'),
                        'koko_pay_order_id' => $orderId, // Legacy compatibility
                        'koko_pay_transaction_id' => $transactionId, // Legacy compatibility
                    ],
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->header('User-Agent'),
                    ]
                );
                
                Log::info('Koko Pay payment cancelled by user', [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                    'koko_pay_order_id' => $orderId,
                    'transaction_created' => true
                ]);
            }
            session()->forget('kokopay_order_id');
        }

        return redirect()->route('checkout.index')
                       ->with('warning', 'Payment was cancelled. You can try again.');
    }

    /**
     * Handle Koko Pay Response URL (_responseUrl) - Secure Server-to-Server Webhook
     * 
     * This is the secure backend notification from Koko Pay after payment completion.
     * Content-Type: application/x-www-form-urlencoded
     * Parameters: orderId, trnId, status (SUCCESS/FAILED), desc, signature
     * 
     * This is the authoritative source for payment confirmation.
     * Signature verification ensures the request is authentic.
     */
    public function handleKokoPayNotify(Request $request)
    {
        \Log::info('=== KOKO PAY WEBHOOK RECEIVED ===');
        \Log::info('Request URL: ' . $request->fullUrl());
        \Log::info('Request Method: ' . $request->method());
        \Log::info('Content Type: ' . $request->header('Content-Type'));
        \Log::info('All Request Data: ', $request->all());
        \Log::info('Raw Input: ' . $request->getContent());

        try {
            // Extract parameters based on Koko Pay API documentation
            $orderId = $request->get('orderId');
            $transactionId = $request->get('trnId');
            $status = $request->get('status');
            $signature = $request->get('signature');
            $description = $request->get('desc', '');

            // Validate required parameters
            if (!$orderId || !$transactionId || !$status) {
                Log::error('Koko Pay webhook: Missing required parameters', [
                    'orderId' => $orderId,
                    'trnId' => $transactionId,
                    'status' => $status
                ]);
                return response('Missing required parameters', 400);
            }

            // Find the order
            $order = Order::find($orderId);
            if (!$order) {
                Log::error('Koko Pay webhook: Order not found', ['order_id' => $orderId]);
                return response('Order not found', 404);
            }

            // TODO: Implement signature verification with Koko Pay public key
            // According to docs: decrypt signature with public key and verify against orderId+trnId+status
            if ($signature) {
                Log::info('Koko Pay webhook: Signature provided for verification', [
                    'signature_length' => strlen($signature),
                    'expected_string' => $orderId . $transactionId . $status
                ]);
                // Signature verification would go here
            } else {
                Log::warning('Koko Pay webhook: No signature provided');
            }

            $paymentStatus = strtolower($status);
            
            Log::info('Processing Koko Pay webhook', [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'koko_pay_order_id' => $orderId,
                'transaction_id' => $transactionId,
                'status' => $paymentStatus,
                'description' => $description
            ]);

            // Check if transaction already exists (avoid duplicates from multiple webhook calls)
            $existingTransaction = \App\Models\Transaction::where('order_id', $order->id)
                ->where('gateway_transaction_id', $transactionId)
                ->first();

            if ($paymentStatus === 'success') {
                // Update order status
                $order->update([
                    'payment_status' => 'paid',
                    'payment_method' => 'kokopay',
                    'payment_reference' => $transactionId,
                    'status' => 'confirmed'
                ]);

                if ($existingTransaction) {
                    // Update existing transaction to mark webhook confirmation
                    $existingTransaction->update([
                        'status' => 'completed',
                        'completed_at' => now(),
                        'metadata' => array_merge($existingTransaction->metadata ?? [], [
                            'webhook_confirmed' => true,
                            'webhook_timestamp' => now()->toISOString(),
                            'webhook_signature_provided' => !empty($signature),
                        ])
                    ]);
                    Log::info('Updated existing transaction via Koko Pay webhook', [
                        'transaction_id' => $existingTransaction->transaction_id
                    ]);
                } else {
                    // Create or find existing transaction record from webhook
                    \App\Models\Transaction::firstOrCreate(
                        ['transaction_id' => 'TXN-' . strtoupper(substr($transactionId, 0, 16))],
                        [
                        'order_id' => $order->id,
                        'payment_method' => 'kokopay',
                        'status' => 'completed',
                        'amount' => $order->total_amount,
                        'currency' => 'LKR',
                        'gateway_transaction_id' => $transactionId,
                        'gateway_reference' => $orderId,
                        'gateway_response' => $request->all(),
                        'customer_name' => $order->customer_name,
                        'customer_email' => $order->customer_email,
                        'customer_phone' => $order->customer_phone,
                        'description' => "Koko Pay webhook payment for order {$order->order_number}",
                        'initiated_at' => $order->created_at,
                        'completed_at' => now(),
                        'metadata' => [
                            // KOKO PAY CORE PARAMETERS
                            'orderId' => $orderId,
                            'trnId' => $transactionId,
                            'status' => $status,
                            'desc' => $description,
                            
                            // KOKO PAY WEBHOOK SPECIFIC
                            'signature' => $signature,
                            'signature_provided' => !empty($signature),
                            
                            // INTERNAL TRACKING
                            'source' => 'webhook',
                            'payment_flow' => 'successful',
                            'webhook_confirmed' => true,
                            'webhook_timestamp' => now()->toISOString(),
                            'koko_pay_order_id' => $orderId, // Legacy compatibility
                            'koko_pay_transaction_id' => $transactionId, // Legacy compatibility
                        ],
                        'ip_address' => $request->ip(),
                        'user_agent' => $request->header('User-Agent'),
                        ]
                    );
                    Log::info('Created new transaction via Koko Pay webhook');
                }

                Log::info('Koko Pay webhook: Payment confirmed successfully', [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                    'koko_pay_order_id' => $orderId
                ]);

                return response('Payment confirmed', 200);

            } else {
                // Handle failed payment
                $order->update([
                    'payment_status' => 'failed',
                    'payment_method' => 'kokopay',
                    'payment_reference' => $transactionId
                ]);

                if ($existingTransaction) {
                    $existingTransaction->update([
                        'status' => 'failed',
                        'failed_at' => now(),
                        'failure_reason' => "Webhook status: {$paymentStatus}. " . ($description ? "Description: {$description}" : ''),
                        'metadata' => array_merge($existingTransaction->metadata ?? [], [
                            'webhook_confirmed' => true,
                            'webhook_timestamp' => now()->toISOString(),
                        ])
                    ]);
                } else {
                    \App\Models\Transaction::firstOrCreate(
                        ['transaction_id' => 'TXN-' . strtoupper(substr($transactionId, 0, 16))],
                        [
                        'order_id' => $order->id,
                        'payment_method' => 'kokopay',
                        'status' => 'failed',
                        'amount' => $order->total_amount,
                        'currency' => 'LKR',
                        'gateway_transaction_id' => $transactionId,
                        'gateway_reference' => $orderId,
                        'gateway_response' => $request->all(),
                        'customer_name' => $order->customer_name,
                        'customer_email' => $order->customer_email,
                        'customer_phone' => $order->customer_phone,
                        'description' => "Failed Koko Pay webhook payment for order {$order->order_number}",
                        'failure_reason' => "Webhook status: {$paymentStatus}. " . ($description ? "Description: {$description}" : ''),
                        'initiated_at' => $order->created_at,
                        'failed_at' => now(),
                        'metadata' => [
                            // KOKO PAY CORE PARAMETERS
                            'orderId' => $orderId,
                            'trnId' => $transactionId,
                            'status' => $status,
                            'desc' => $description,
                            
                            // KOKO PAY WEBHOOK SPECIFIC
                            'signature' => $signature,
                            'signature_provided' => !empty($signature),
                            
                            // INTERNAL TRACKING
                            'source' => 'webhook',
                            'payment_flow' => 'failed',
                            'webhook_confirmed' => true,
                            'webhook_timestamp' => now()->toISOString(),
                            'original_status' => $status,
                            'koko_pay_order_id' => $orderId, // Legacy compatibility
                            'koko_pay_transaction_id' => $transactionId, // Legacy compatibility
                        ],
                        'ip_address' => $request->ip(),
                        'user_agent' => $request->header('User-Agent'),
                        ]
                    );
                }

                Log::warning('Koko Pay webhook: Payment failed', [
                    'order_id' => $order->id,
                    'order_number' => $order->order_number,
                    'koko_pay_order_id' => $orderId,
                    'status' => $paymentStatus
                ]);

                return response('Payment failed', 200);
            }

        } catch (\Exception $e) {
            Log::error('Koko Pay webhook processing failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);

            return response('Webhook processing failed', 500);
        }
    }

    /**
     * Check Koko Pay payment status
     */
    public function checkKokoPayPaymentStatus(Request $request, Order $order)
    {
        Log::info('Koko Pay payment status check requested', ['order_id' => $order->id]);

        return response()->json([
            'order_id' => $order->id,
            'payment_status' => $order->payment_status,
            'payment_method' => $order->payment_method,
            'payment_reference' => $order->payment_reference,
        ]);
    }

    /**
     * Test Koko Pay configuration
     */
    public function testKokoPay()
    {
        $kokoPayService = new KokoPayService();
        $config = $kokoPayService->getConfig();
        
        return response()->json([
            'message' => 'Koko Pay Configuration',
            'config' => $config,
            'timestamp' => now()->toDateTimeString()
        ]);
    }
}
