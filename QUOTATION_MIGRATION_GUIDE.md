# 🚀 Quotation System Migration Guide

## 📋 **Migration Overview**
This guide will help you safely migrate the new quotation system to your live server without losing any existing data.

## 🎯 **What's Being Added**
- New `quotations` table
- Quotation management system
- Admin quotation dashboard
- PDF quotation generation
- Enhanced checkout flow

## ⚠️ **IMPORTANT: Data Safety**
- **NO existing data will be lost**
- **NO existing tables will be modified**
- **Only NEW tables and files will be added**

---

## 📁 **Files to Upload**

### **1. Database Migration**
```
database/migrations/2025_10_20_124811_create_quotations_table.php
```

### **2. New Models**
```
app/Models/Quotation.php
```

### **3. New Controllers**
```
app/Http/Controllers/Admin/AdminQuotationController.php
```

### **4. New Views**
```
resources/views/admin/quotations/index.blade.php
resources/views/admin/quotations/show.blade.php
resources/views/quotations/pdf.blade.php
```

### **5. Updated Files**
```
app/Http/Controllers/QuotationController.php
app/Http/Controllers/CheckoutController.php
app/Http/Controllers/Admin/AdminDashboardController.php
resources/views/admin/layout.blade.php
resources/views/layouts/app.blade.php
routes/web.php
```

---

## 🛠️ **Migration Steps**

### **Step 1: Backup Your Database**
```bash
# Create a backup before migration
mysqldump -u username -p database_name > backup_before_quotation_migration.sql
```

### **Step 2: Upload Files**
Upload all the files listed above to your server in their respective directories.

### **Step 3: Run Migration**
```bash
# Navigate to your project directory
cd /path/to/your/project

# Run the migration
php artisan migrate

# Check migration status
php artisan migrate:status
```

### **Step 4: Clear Caches**
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan optimize
```

### **Step 5: Set Permissions**
```bash
# Set proper permissions for storage
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

---

## 🔍 **Verification Steps**

### **1. Check Database**
```sql
-- Verify quotations table exists
SHOW TABLES LIKE 'quotations';

-- Check table structure
DESCRIBE quotations;
```

### **2. Test Quotation System**
1. Go to your website
2. Add items to cart
3. Click "Get Quote"
4. Fill quotation form
5. Download PDF
6. Check admin panel for quotations

### **3. Check Admin Panel**
1. Login to admin panel
2. Verify "Quotations" menu appears
3. Check quotation statistics on dashboard
4. Test quotation management features

---

## 🚨 **Rollback Plan (If Needed)**

### **If Something Goes Wrong:**
```bash
# Rollback the migration
php artisan migrate:rollback --step=1

# Restore from backup
mysql -u username -p database_name < backup_before_quotation_migration.sql
```

---

## 📊 **Database Schema**

### **New Table: `quotations`**
```sql
CREATE TABLE quotations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    quotation_number VARCHAR(255) UNIQUE,
    user_id BIGINT UNSIGNED NULL,
    session_id VARCHAR(255) NULL,
    customer_name VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    customer_email VARCHAR(255) NULL,
    customer_phone VARCHAR(255),
    customer_address TEXT NULL,
    customer_city VARCHAR(255) NULL,
    customer_state VARCHAR(255) NULL,
    customer_postal_code VARCHAR(255) NULL,
    customer_country VARCHAR(255) DEFAULT 'Sri Lanka',
    subtotal DECIMAL(10,2),
    original_subtotal DECIMAL(10,2) DEFAULT 0,
    total_discount DECIMAL(10,2) DEFAULT 0,
    shipping_cost DECIMAL(10,2) DEFAULT 0,
    tax_amount DECIMAL(10,2) DEFAULT 0,
    total_amount DECIMAL(10,2),
    status ENUM('pending', 'sent', 'accepted', 'rejected', 'expired') DEFAULT 'pending',
    valid_until DATE,
    sent_at TIMESTAMP NULL,
    viewed_at TIMESTAMP NULL,
    responded_at TIMESTAMP NULL,
    notes TEXT NULL,
    admin_notes TEXT NULL,
    items_data JSON,
    created_by_admin_id BIGINT UNSIGNED NULL,
    admin_viewed_at TIMESTAMP NULL,
    viewed_by_admin_id BIGINT UNSIGNED NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    
    INDEX idx_status_created (status, created_at),
    INDEX idx_valid_until (valid_until),
    INDEX idx_customer_email (customer_email),
    INDEX idx_customer_phone (customer_phone),
    
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (created_by_admin_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (viewed_by_admin_id) REFERENCES users(id) ON DELETE SET NULL
);
```

---

## 🎉 **Post-Migration Benefits**

### **New Features Available:**
1. **Quotation System** - Customers can request quotes
2. **Admin Management** - Full quotation management in admin panel
3. **PDF Generation** - Professional quotation PDFs
4. **Enhanced Checkout** - Improved user experience
5. **Analytics** - Quotation statistics in dashboard

### **Business Benefits:**
1. **Lead Generation** - Capture customer interest
2. **Professional Image** - Branded quotation PDFs
3. **Better Tracking** - Monitor quotation performance
4. **Improved Sales** - Streamlined quote-to-order process

---

## 📞 **Support**

If you encounter any issues during migration:
1. Check Laravel logs: `storage/logs/laravel.log`
2. Verify file permissions
3. Check database connectivity
4. Ensure all files are uploaded correctly

---

## ✅ **Migration Checklist**

- [ ] Database backup created
- [ ] All files uploaded
- [ ] Migration run successfully
- [ ] Caches cleared
- [ ] Permissions set
- [ ] Quotation system tested
- [ ] Admin panel verified
- [ ] PDF generation working
- [ ] No errors in logs

---

**🎯 Ready to migrate! Follow the steps above for a smooth, safe migration.**
