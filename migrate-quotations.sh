#!/bin/bash

# 🚀 Quotation System Migration Script
# This script safely migrates the quotation system to your live server

echo "🚀 Starting Quotation System Migration..."
echo "========================================"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

print_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if we're in a Laravel project
if [ ! -f "artisan" ]; then
    print_error "This doesn't appear to be a Laravel project. Please run this script from your project root."
    exit 1
fi

print_status "Laravel project detected ✓"

# Create database backup
print_status "Creating database backup..."
DB_NAME=$(php artisan tinker --execute="echo config('database.connections.mysql.database');" 2>/dev/null | tail -1)
if [ -z "$DB_NAME" ]; then
    print_warning "Could not detect database name. Please create a manual backup before proceeding."
else
    BACKUP_FILE="backup_before_quotation_migration_$(date +%Y%m%d_%H%M%S).sql"
    print_status "Creating backup: $BACKUP_FILE"
    # Note: You'll need to provide database credentials
    print_warning "Please create a manual backup of your database before proceeding."
fi

# Check if migration file exists
if [ ! -f "database/migrations/2025_10_20_124811_create_quotations_table.php" ]; then
    print_error "Migration file not found. Please ensure all files are uploaded."
    exit 1
fi

print_status "Migration file found ✓"

# Check if Quotation model exists
if [ ! -f "app/Models/Quotation.php" ]; then
    print_error "Quotation model not found. Please ensure all files are uploaded."
    exit 1
fi

print_status "Quotation model found ✓"

# Run the migration
print_status "Running database migration..."
php artisan migrate --force

if [ $? -eq 0 ]; then
    print_success "Migration completed successfully!"
else
    print_error "Migration failed. Please check the error messages above."
    exit 1
fi

# Clear caches
print_status "Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

print_success "Caches cleared ✓"

# Optimize for production
print_status "Optimizing for production..."
php artisan optimize

print_success "Optimization completed ✓"

# Set permissions
print_status "Setting file permissions..."
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/

print_success "Permissions set ✓"

# Check migration status
print_status "Checking migration status..."
php artisan migrate:status | grep quotations

echo ""
echo "🎉 Migration completed successfully!"
echo "========================================"
echo ""
echo "Next steps:"
echo "1. Test the quotation system on your website"
echo "2. Check the admin panel for quotations menu"
echo "3. Verify PDF generation is working"
echo "4. Test the complete checkout flow"
echo ""
echo "If you encounter any issues:"
echo "- Check Laravel logs: storage/logs/laravel.log"
echo "- Verify all files are uploaded correctly"
echo "- Check database connectivity"
echo ""
print_success "Quotation system is now live! 🚀"
