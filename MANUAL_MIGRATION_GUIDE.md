# 🚀 Manual Migration Guide (No Terminal Access)

## 📋 **Overview**
This guide will help you migrate the quotation system using only your hosting control panel and file manager - **NO terminal access required!**

---

## 🎯 **What You'll Need:**
- ✅ Hosting control panel access (cPanel, Plesk, etc.)
- ✅ File manager or FTP access
- ✅ Database management (phpMyAdmin)
- ✅ **NO terminal/SSH required!**

---

## 📤 **Step 1: Upload Files via File Manager**

### **1.1 Access Your File Manager**
- Login to your hosting control panel
- Open **File Manager** or use **FTP**
- Navigate to your website's root directory

### **1.2 Upload New Files**
Upload these files to their respective directories:

#### **📁 Database Migration:**
```
📂 public_html/database/migrations/
└── 2025_10_20_124811_create_quotations_table.php
```

#### **📁 Models:**
```
📂 public_html/app/Models/
└── Quotation.php
```

#### **📁 Controllers:**
```
📂 public_html/app/Http/Controllers/Admin/
└── AdminQuotationController.php
```

#### **📁 Admin Views:**
```
📂 public_html/resources/views/admin/quotations/
├── index.blade.php
└── show.blade.php
```

#### **📁 Quotation Views:**
```
📂 public_html/resources/views/quotations/
└── pdf.blade.php
```

#### **📁 Checkout Views:**
```
📂 public_html/resources/views/checkout/
├── select-option.blade.php
├── quotation.blade.php
└── payment.blade.php
```

### **1.3 Replace Updated Files**
Replace these existing files with the new versions:

#### **📁 Controllers:**
```
📂 public_html/app/Http/Controllers/
├── QuotationController.php (replace)
└── CheckoutController.php (replace)

📂 public_html/app/Http/Controllers/Admin/
└── AdminDashboardController.php (replace)
```

#### **📁 Views:**
```
📂 public_html/resources/views/
├── admin/layout.blade.php (replace)
├── layouts/app.blade.php (replace)
└── checkout/index.blade.php (replace)
```

#### **📁 Routes:**
```
📂 public_html/routes/
└── web.php (replace)
```

---

## 🗄️ **Step 2: Database Migration via phpMyAdmin**

### **2.1 Access phpMyAdmin**
- Login to your hosting control panel
- Open **phpMyAdmin**
- Select your database

### **2.2 Create Database Backup**
1. Click on your database name
2. Go to **Export** tab
3. Select **Quick** export method
4. Choose **SQL** format
5. Click **Go** to download backup

### **2.3 Run Migration SQL**
Copy and paste this SQL into phpMyAdmin's **SQL** tab:

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

### **2.4 Verify Table Creation**
1. Refresh your database view
2. Look for the new `quotations` table
3. Verify it has all the columns listed above

---

## 🧹 **Step 3: Clear Caches via Control Panel**

### **3.1 Clear Laravel Caches**
If your hosting has a **Laravel cache clearing** option:
- Use the cache clearing feature in your control panel

### **3.2 Manual Cache Clearing**
If no cache clearing option available:
1. Go to **File Manager**
2. Navigate to `storage/framework/cache/`
3. Delete all files in this folder (except `.gitignore`)
4. Navigate to `storage/framework/views/`
5. Delete all files in this folder (except `.gitignore`)

---

## 🔐 **Step 4: Set File Permissions**

### **4.1 Set Storage Permissions**
1. Right-click on `storage` folder
2. Select **Permissions** or **Change Permissions**
3. Set to **755** or **777**
4. Apply to all subfolders

### **4.2 Set Bootstrap Cache Permissions**
1. Right-click on `bootstrap/cache` folder
2. Select **Permissions** or **Change Permissions**
3. Set to **755** or **777**

---

## ✅ **Step 5: Test the System**

### **5.1 Test Frontend**
1. Go to your website
2. Add items to cart
3. Click **"Get Quote"**
4. Fill the quotation form
5. Download the PDF
6. Verify it works correctly

### **5.2 Test Admin Panel**
1. Login to your admin panel
2. Look for **"Quotations"** menu item
3. Check if quotation statistics appear on dashboard
4. Test quotation management features

### **5.3 Test Checkout Flow**
1. Add items to cart
2. Go to checkout
3. Test both **"Get Quote"** and **"Buy Now"** options
4. Verify payment flow works

---

## 🚨 **Troubleshooting**

### **If Something Goes Wrong:**

#### **Database Issues:**
1. Go to phpMyAdmin
2. Find the `quotations` table
3. Click **Drop** to remove it
4. Re-run the SQL creation script

#### **File Issues:**
1. Check if all files are uploaded correctly
2. Verify file permissions are set properly
3. Check if file paths are correct

#### **Cache Issues:**
1. Manually delete cache files as described in Step 3
2. Clear browser cache
3. Try accessing the site in incognito mode

---

## 📞 **Support**

### **Common Issues:**
- **"Class not found"** → Check if all files are uploaded
- **"Table doesn't exist"** → Verify SQL migration was run
- **"Permission denied"** → Check file permissions
- **"Cache errors"** → Clear all cache files

### **Verification Checklist:**
- [ ] All files uploaded successfully
- [ ] Database table created
- [ ] File permissions set
- [ ] Cache cleared
- [ ] Frontend quotation system working
- [ ] Admin panel quotations menu visible
- [ ] PDF generation working
- [ ] No error messages

---

## 🎉 **Success!**

Once all steps are completed:
- ✅ Your quotation system is live
- ✅ Customers can request quotes
- ✅ You can manage quotations in admin panel
- ✅ Professional PDFs are generated
- ✅ Enhanced checkout flow is active

**No terminal access needed - everything done through your hosting control panel!** 🚀
