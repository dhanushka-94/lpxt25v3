# WebXPay Sandbox Testing Guide

## 🔧 **Sandbox Configuration Applied**

### **✅ Current Status:**
- **Mode:** Sandbox Testing
- **Environment:** https://stagingxpay.info
- **Live Keys:** Safely backed up to `.env.webxpay.live.backup`

### **🔑 Sandbox Credentials (Active):**
```
API Username: LVcmbejCvA
API Password: M2Za8D7U95
Secret Key: 44aea68e-8cf2-4772-a545-a58fb10bbf9e
Public Key: [Sandbox Public Key Applied]
Checkout URL: https://stagingxpay.info/index.php?route=checkout/billing
```

---

## 🧪 **Testing Instructions**

### **1. Test Payment Flow:**
1. **Add products to cart**
2. **Go to checkout page**
3. **Fill customer information** (use test data)
4. **Select "Credit Card" payment method**
5. **Click "Complete Secure Payment"**
6. **You'll be redirected to WebXPay sandbox**

### **2. Test Card Numbers (Sandbox):**
```
✅ Success Test Card:
Card Number: 4111111111111111
Expiry: 12/25
CVV: 123
Name: Test User

❌ Decline Test Card:
Card Number: 4000000000000002
Expiry: 12/25
CVV: 123
Name: Test User

⏳ Pending Test Card:
Card Number: 4000000000000069
Expiry: 12/25
CVV: 123
Name: Test User
```

### **3. Expected Behavior:**
- **Success:** Redirects to order confirmation page
- **Decline:** Shows payment failed message
- **Pending:** Order marked as pending payment
- **All transactions** should appear in backend "Transactions" page

---

## 🔍 **Verification Points**

### **✅ Check These Areas:**
1. **Payment Processing:**
   - Amount calculation (base + 3% fee)
   - Encryption working properly
   - Redirect URLs functioning

2. **Backend Records:**
   - Transaction created in database
   - Order status updated correctly
   - Payment method and card type recorded

3. **Customer Experience:**
   - Smooth redirect to WebXPay
   - Proper return to success/failure pages
   - Invoice generation working

---

## 🚨 **Important Notes**

### **⚠️ Sandbox Limitations:**
- **No real money** is processed
- **Test cards only** - real cards will be declined
- **Sandbox environment** may have different response times
- **Some features** might behave differently than live

### **🔒 Security Reminders:**
- **Never commit** `.env.webxpay.live.backup` to version control
- **Test thoroughly** before switching back to live
- **Verify all URLs** point to staging environment

---

## 🔄 **Restore Live Keys**

### **When Testing is Complete:**
1. **Copy credentials from** `.env.webxpay.live.backup`
2. **Update .env file** with live credentials
3. **Change WEBXPAY_MODE** back to `live`
4. **Run:** `php artisan config:clear`
5. **Test with small live transaction**

### **Live Credentials (for reference):**
```
Mode: live
API Username: eUPFGVtxjo
API Password: aLHP8lCIcT
Secret Key: 32881539-5f7b-4743-aa37-5f4762b005ee
Checkout URL: https://webxpay.com/index.php?route=checkout/billing
```

---

## 🛠️ **Troubleshooting**

### **Common Issues:**
1. **"Encryption Failed"**
   - Check public key format
   - Verify no extra spaces/characters

2. **"Invalid Credentials"**
   - Confirm API username/password
   - Check secret key is correct

3. **"Redirect Failed"**
   - Verify return URLs are accessible
   - Check APP_URL in .env

4. **"Amount Mismatch"**
   - Confirm 3% fee calculation
   - Check currency format (LKR)

---

## 📞 **Support**

### **If Issues Occur:**
1. **Check Laravel logs:** `storage/logs/laravel.log`
2. **Review WebXPay response** in transaction details
3. **Verify configuration** with: `php artisan tinker --execute="dd(config('webxpay'));"`
4. **Test configuration endpoint:** `/payment/webxpay/test`

---

**🎯 Ready for sandbox testing! Use the test card numbers above to simulate different payment scenarios.**
