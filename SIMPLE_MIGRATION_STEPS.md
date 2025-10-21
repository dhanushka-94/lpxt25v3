# 🚀 Simple Migration Steps

## ⚠️ **IMPORTANT: Backup First!**
```bash
# Create database backup
mysqldump -u your_username -p your_database_name > backup_$(date +%Y%m%d).sql
```

## 📤 **Step 1: Upload Files**
Upload these files to your server:

### **New Files:**
- `database/migrations/2025_10_20_124811_create_quotations_table.php`
- `app/Models/Quotation.php`
- `app/Http/Controllers/Admin/AdminQuotationController.php`
- `resources/views/admin/quotations/index.blade.php`
- `resources/views/admin/quotations/show.blade.php`
- `resources/views/quotations/pdf.blade.php`
- `resources/views/checkout/select-option.blade.php`
- `resources/views/checkout/quotation.blade.php`
- `resources/views/checkout/payment.blade.php`

### **Updated Files:**
- `app/Http/Controllers/QuotationController.php`
- `app/Http/Controllers/CheckoutController.php`
- `app/Http/Controllers/Admin/AdminDashboardController.php`
- `resources/views/admin/layout.blade.php`
- `resources/views/layouts/app.blade.php`
- `resources/views/checkout/index.blade.php`
- `routes/web.php`

## 🔧 **Step 2: Run Migration**
```bash
# SSH into your server
ssh your_username@your_server

# Navigate to project
cd /path/to/your/project

# Run migration
php artisan migrate
```

## 🧹 **Step 3: Clear Caches**
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize
```

## 🔐 **Step 4: Set Permissions**
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

## ✅ **Step 5: Test**
1. Go to your website
2. Add items to cart
3. Click "Get Quote"
4. Fill the form and download PDF
5. Check admin panel for "Quotations" menu

## 🎉 **Done!**
Your quotation system is now live!

---

## 🚨 **If Something Goes Wrong:**
```bash
# Rollback migration
php artisan migrate:rollback --step=1

# Restore from backup
mysql -u your_username -p your_database_name < backup_YYYYMMDD.sql
```
