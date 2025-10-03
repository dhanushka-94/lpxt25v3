{{-- Payment Method Badges Component --}}
<div class="payment-badges flex flex-wrap gap-1.5 mt-2 mb-2">
    {{-- KokoPay + Installment Combined Badge --}}
    <div class="flex items-center bg-gradient-to-r from-[#ec4899]/5 to-[#10b981]/5 border border-[#ec4899]/20 rounded-md px-2 py-1 hover:from-[#ec4899]/10 hover:to-[#10b981]/10 transition-all shadow-sm">
        <img src="{{ asset('images/kokopay-logo.png') }}" 
             alt="KokoPay" 
             class="w-8 h-8 mr-1.5 object-contain">
        <div class="flex flex-col">
            <span class="text-[8px] font-semibold text-[#ec4899] tracking-wide leading-tight">KOKO Pay</span>
            <span class="text-[7px] font-medium text-[#10b981] tracking-wide leading-tight">Installments</span>
        </div>
    </div>
</div>
