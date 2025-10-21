-- 🚀 Quotation System Database Migration
-- Copy and paste this SQL into phpMyAdmin

CREATE TABLE quotations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    quotation_number VARCHAR(255) UNIQUE,
    user_id BIGINT UNSIGNED NULL,
    session_id VARCHAR(255) NULL,
    
    -- Customer Information
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
    
    -- Quotation Details
    subtotal DECIMAL(10,2),
    original_subtotal DECIMAL(10,2) DEFAULT 0,
    total_discount DECIMAL(10,2) DEFAULT 0,
    shipping_cost DECIMAL(10,2) DEFAULT 0,
    tax_amount DECIMAL(10,2) DEFAULT 0,
    total_amount DECIMAL(10,2),
    
    -- Status and Dates
    status ENUM('pending', 'sent', 'accepted', 'rejected', 'expired') DEFAULT 'pending',
    valid_until DATE,
    sent_at TIMESTAMP NULL,
    viewed_at TIMESTAMP NULL,
    responded_at TIMESTAMP NULL,
    
    -- Additional Information
    notes TEXT NULL,
    admin_notes TEXT NULL,
    items_data JSON,
    
    -- Admin tracking
    created_by_admin_id BIGINT UNSIGNED NULL,
    admin_viewed_at TIMESTAMP NULL,
    viewed_by_admin_id BIGINT UNSIGNED NULL,
    
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    
    -- Indexes for better performance
    INDEX idx_status_created (status, created_at),
    INDEX idx_valid_until (valid_until),
    INDEX idx_customer_email (customer_email),
    INDEX idx_customer_phone (customer_phone),
    
    -- Foreign key constraints
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (created_by_admin_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (viewed_by_admin_id) REFERENCES users(id) ON DELETE SET NULL
);

-- ✅ Table created successfully!
-- You can now use the quotation system.
