# 📋 File Upload Checklist

## 🎯 **Upload These Files to Your Server**

### **✅ New Files to Upload:**

#### **📁 Database Migration:**
- [ ] `database/migrations/2025_10_20_124811_create_quotations_table.php`

#### **📁 Models:**
- [ ] `app/Models/Quotation.php`

#### **📁 Controllers:**
- [ ] `app/Http/Controllers/Admin/AdminQuotationController.php`

#### **📁 Admin Views:**
- [ ] `resources/views/admin/quotations/index.blade.php`
- [ ] `resources/views/admin/quotations/show.blade.php`

#### **📁 Quotation Views:**
- [ ] `resources/views/quotations/pdf.blade.php`

#### **📁 Checkout Views:**
- [ ] `resources/views/checkout/select-option.blade.php`
- [ ] `resources/views/checkout/quotation.blade.php`
- [ ] `resources/views/checkout/payment.blade.php`

### **🔄 Files to Replace (Update existing):**

#### **📁 Controllers:**
- [ ] `app/Http/Controllers/QuotationController.php`
- [ ] `app/Http/Controllers/CheckoutController.php`
- [ ] `app/Http/Controllers/Admin/AdminDashboardController.php`

#### **📁 Views:**
- [ ] `resources/views/admin/layout.blade.php`
- [ ] `resources/views/layouts/app.blade.php`
- [ ] `resources/views/checkout/index.blade.php`

#### **📁 Routes:**
- [ ] `routes/web.php`

---

## 🗄️ **Database Setup:**

### **✅ SQL to Run in phpMyAdmin:**
- [ ] Create database backup
- [ ] Run quotations table creation SQL
- [ ] Verify table was created successfully

---

## 🧹 **Post-Upload Tasks:**

### **✅ File Permissions:**
- [ ] Set `storage/` folder permissions to 755
- [ ] Set `bootstrap/cache/` folder permissions to 755

### **✅ Cache Clearing:**
- [ ] Delete files in `storage/framework/cache/`
- [ ] Delete files in `storage/framework/views/`

---

## ✅ **Testing:**

### **✅ Frontend Testing:**
- [ ] Add items to cart
- [ ] Click "Get Quote"
- [ ] Fill quotation form
- [ ] Download PDF
- [ ] Test "Buy Now" option

### **✅ Admin Panel Testing:**
- [ ] Login to admin panel
- [ ] Check for "Quotations" menu
- [ ] Verify quotation statistics on dashboard
- [ ] Test quotation management features

---

## 🎉 **Migration Complete!**

Once all items are checked:
- ✅ Quotation system is live
- ✅ All features working
- ✅ No errors reported
- ✅ Ready for production use

**Total Files to Upload: 16 files**
**Total Files to Replace: 6 files**
**Total: 22 files**
