# MSK COMPUTERS References - Deep Scan Report
Generated: Based on comprehensive codebase scan

## Summary
Found **114+ instances** of "MSK COMPUTERS" or "MSK Computers" across the codebase.

---

## 📁 File Locations by Category

### 1. VIEW FILES (Blade Templates) - 87 instances

#### **Category Pages:**
- `resources/views/categories/show.blade.php` (Line 40)
  - Category sub header: `MSK COMPUTERS`

- `resources/views/categories/index.blade.php` (Lines 3-4)
  - Page title and description

#### **Order & Checkout Pages:**
- `resources/views/orders/invoice.blade.php` (Lines 3, 17, 193, 237)
  - Invoice title, header, footer text
  
- `resources/views/orders/track.blade.php` (Line 39)
  - Order number placeholder: `MSK-2024-001234`

- `resources/views/user/order-detail.blade.php` (Lines 3-4)
  - Page title and description

- `resources/views/checkout/payment.blade.php` (Lines 3, 354)
  - Page title and company name

- `resources/views/checkout/success.blade.php` (Lines 3-4, 18, 288)
  - Page title, description, thank you message, company name

- `resources/views/checkout/quotation.blade.php` (Line 3)
  - Page title

- `resources/views/cart/index.blade.php` (Line 3)
  - Page title

#### **Authentication Pages:**
- `resources/views/auth/login.blade.php` (Lines 3-4, 24)
  - Page title, description, welcome text

- `resources/views/auth/register.blade.php` (Lines 3-4, 24)
  - Page title, description, welcome text

#### **User Account Pages:**
- `resources/views/user/dashboard.blade.php` (Lines 3-4)
  - Page title and description

- `resources/views/user/profile.blade.php` (Lines 3-4)
  - Page title and description

- `resources/views/user/addresses.blade.php` (Lines 3-4)
  - Page title and description

- `resources/views/user/settings.blade.php` (Lines 3, 140, 148)
  - Page title, privacy settings options

#### **Payment Pages:**
- `resources/views/payment/webxpay.blade.php` (Line 3)
  - Page title

- `resources/views/payment/kokopay.blade.php` (Line 3)
  - Page title

#### **Legal Pages:**
- `resources/views/legal/terms-of-service.blade.php` (Lines 20, 24, 26, 143, 158, 193, 202)
  - Multiple references in terms text

- `resources/views/legal/privacy-policy.blade.php` (Lines 3, 20, 228, 231)
  - Privacy policy content

#### **Other Pages:**
- `resources/views/warranty.blade.php` (Lines 3-4)
  - Page title and description

- `resources/views/errors/404.blade.php` (Line 3)
  - Error page title

- `resources/views/e-services.blade.php` (Line 480)
  - Customer testimonial text

- `resources/views/admin/dashboard.blade.php` (Line 12)
  - Admin welcome message

- `resources/views/layouts/invoice.blade.php` (Line 7)
  - Default invoice title

- `resources/views/contact-us.blade.php` (Line 340)
  - Google Maps embed URL (contains MSK COMPUTERS)

---

### 2. EMAIL TEMPLATES - 12 instances

- `resources/views/emails/welcome-new-user.blade.php` (Lines 2, 6, 49, 52, 56, 58)
  - Welcome email subject, content, team signature, social links

- `resources/views/emails/order-confirmation.blade.php` (Lines 63, 102, 105)
  - Bank account name, thank you message, team signature

- `resources/views/emails/order-processing.blade.php` (Line 75)
  - Team signature

- `resources/views/emails/order-confirmed.blade.php` (Lines 53, 56)
  - Thank you message, team signature

- `resources/views/emails/order-status-updated.blade.php` (Line 42)
  - Thank you message

- `resources/views/emails/order-cancelled.blade.php` (Lines 79, 84, 112)
  - Showroom info, heading, team signature

- `resources/views/emails/order-delivered.blade.php` (Lines 68, 89, 91, 94, 97)
  - Experience question, social links, thank you, team signature

- `resources/views/emails/order-shipped.blade.php` (Lines 83, 86)
  - Thank you message, team signature

- `resources/views/emails/order-refunded.blade.php` (Lines 37, 51, 103, 106, 110)
  - Reference number format, description, thank you, team signature, reference

- `resources/views/emails/payment-received.blade.php` (Lines 92, 118, 121)
  - Service support mention, thank you, team signature

- `resources/views/emails/payment-failed.blade.php` (Lines 49, 59)
  - Bank account name, showroom info

---

### 3. PHP CONTROLLERS - 4 instances

- `app/Http/Controllers/Admin/AdminOrderController.php` (Line 367)
  - Order number generation: `'MSK-' . date('Y') . '-' . ...`

- `app/Http/Controllers/Auth/AuthController.php` (Line 128)
  - Registration success message: `'Welcome to MSK Computers.'`

- `app/Http/Controllers/PaymentController.php` (In logs)
  - KokoPay order descriptions: `"MSK Computers Order #{$orderId}"`

---

### 4. MAIL CLASSES - 1 instance

- `app/Mail/WelcomeNewUser.php` (Line 33)
  - Email subject: `'Welcome to MSK Computers!'`

---

### 5. DATABASE SEEDERS - 34 instances

- `database/seeders/ProductSeeder.php` (Multiple lines)
  - Sample products with MSK branding:
    - MSK Gaming Beast Pro
    - MSK Gaming Elite
    - MSK Business Pro Workstation
    - MSK UltraBook Pro 15
    - MSK Gaming Laptop RTX
    - MSK 4K Gaming Monitor 32"
    - MSK UltraWide Curved Monitor
    - MSK Mechanical Keyboard RGB Pro
    - MSK Gaming Mouse Pro
    - MSK Custom RTX 4080 Graphics Card

- `database/seeders/ComprehensiveSystemSeeder.php` (Lines 67, 209)
  - Admin user name: 'MSK Admin'
  - Order number format: `'MSK' . str_pad(...)`

- `database/seeders/TransactionSeeder.php` (Line 55)
  - Transaction description: `'MSK Computers Order #' . $order->order_number`

- `database/seeders/CleanDatabaseSeeder.php` (Line 73)
  - Admin user name: 'MSK Admin'

---

### 6. CONFIGURATION FILES - 2 instances

- `config/kokopay.php` (Line 21)
  - Plugin name: `env('KOKOPAY_PLUGIN_NAME', 'MSK_Computers')`

- `config/database.php` (Line 34)
  - Comment: `// SQLite configuration removed - MSK Computers uses MySQL exclusively`

---

### 7. CONSOLE COMMANDS - 2 instances

- `app/Console/Commands/CreateSampleActivityLogs.php` (Lines 48, 95)
  - Activity log description: `'Visited MSK Computers homepage'`
  - Sample order number: `'MSK-2024-' . ...`

---

### 8. LOG FILES - 11 instances

- `storage/logs/laravel.log` (Multiple entries)
  - Historical log entries with KokoPay order descriptions:
    - `"description":"MSK Computers Order #382"`
    - `"description":"MSK Computers Order #383"`
    - `"description":"MSK Computers Order #384"`
    - `"description":"MSK Computers Order #388"` (multiple times)
    - `"description":"MSK Computers Order #389"`
    - `"description":"MSK Computers Order #391"`

---

### 9. COMPILED VIEWS (Cache) - 3 instances

- `storage/framework/views/a8b5851c146c28c104573150a8d1781b.php`
  - Compiled view with MSK Computers text

- `storage/framework/views/5013035907d7e7c131e81e3638a3d189.php`
  - Compiled privacy policy view

- `storage/framework/views/9b46729e9a9bd261e125bf46e8969c4d.php`
  - Compiled category view with MSK COMPUTERS header

---

## 🔍 Critical Areas to Update

### **HIGH PRIORITY:**
1. **Order Number Generation** - `AdminOrderController.php` (Line 367)
   - Format: `MSK-YYYY-XXXXXX` → Should be `LPXT-YYYY-XXXXXX` or similar

2. **Payment Gateway Descriptions** - `PaymentController.php`
   - KokoPay descriptions: `"MSK Computers Order #{$orderId}"`

3. **Invoice Templates** - `orders/invoice.blade.php`
   - Company name appears multiple times

4. **Email Templates** - All email files
   - Team signatures, thank you messages, company references

### **MEDIUM PRIORITY:**
1. **Page Titles & Meta Descriptions** - All view files
   - SEO titles and descriptions

2. **Legal Documents** - Terms of Service, Privacy Policy
   - Multiple company name references

3. **User Interface Text** - All user-facing pages
   - Welcome messages, page titles

### **LOW PRIORITY:**
1. **Database Seeders** - Sample data only (development)
2. **Configuration Comments** - Informational
3. **Log Files** - Historical data (not code)

---

## 📊 Statistics

- **Total Files with MSK References:** 50+
- **Total Instances:** 114+
- **View Files:** 87 instances
- **PHP Files:** 7 instances
- **Email Templates:** 12 instances
- **Database Seeders:** 34 instances (sample data)
- **Config Files:** 2 instances
- **Log Files:** 11 instances (historical)

---

## ✅ Next Steps Recommendation

1. **Create a systematic replacement plan:**
   - Replace "MSK COMPUTERS" → "LAPTOP EXPERT"
   - Replace "MSK Computers" → "Laptop Expert"
   - Replace "MSK Computers (Pvt) Ltd" → "Laptop Expert (Pvt) Ltd"

2. **Update order number format:**
   - `MSK-YYYY-XXXXXX` → `LPXT-YYYY-XXXXXX` or `LE-YYYY-XXXXXX`

3. **Update payment descriptions:**
   - "MSK Computers Order #" → "Laptop Expert Order #"

4. **Clear compiled views after updates:**
   - Run `php artisan view:clear`

5. **Test all affected pages:**
   - Order processing
   - Email sending
   - Invoice generation
   - Payment gateway integrations

