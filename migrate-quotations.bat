@echo off
REM 🚀 Quotation System Migration Script for Windows
REM This script safely migrates the quotation system to your live server

echo 🚀 Starting Quotation System Migration...
echo ========================================

REM Check if we're in a Laravel project
if not exist "artisan" (
    echo [ERROR] This doesn't appear to be a Laravel project. Please run this script from your project root.
    pause
    exit /b 1
)

echo [INFO] Laravel project detected ✓

REM Check if migration file exists
if not exist "database\migrations\2025_10_20_124811_create_quotations_table.php" (
    echo [ERROR] Migration file not found. Please ensure all files are uploaded.
    pause
    exit /b 1
)

echo [INFO] Migration file found ✓

REM Check if Quotation model exists
if not exist "app\Models\Quotation.php" (
    echo [ERROR] Quotation model not found. Please ensure all files are uploaded.
    pause
    exit /b 1
)

echo [INFO] Quotation model found ✓

echo [WARNING] Please create a manual backup of your database before proceeding.
echo Press any key to continue with migration...
pause

REM Run the migration
echo [INFO] Running database migration...
php artisan migrate --force

if %errorlevel% neq 0 (
    echo [ERROR] Migration failed. Please check the error messages above.
    pause
    exit /b 1
)

echo [SUCCESS] Migration completed successfully!

REM Clear caches
echo [INFO] Clearing caches...
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo [SUCCESS] Caches cleared ✓

REM Optimize for production
echo [INFO] Optimizing for production...
php artisan optimize

echo [SUCCESS] Optimization completed ✓

REM Check migration status
echo [INFO] Checking migration status...
php artisan migrate:status | findstr quotations

echo.
echo 🎉 Migration completed successfully!
echo ========================================
echo.
echo Next steps:
echo 1. Test the quotation system on your website
echo 2. Check the admin panel for quotations menu
echo 3. Verify PDF generation is working
echo 4. Test the complete checkout flow
echo.
echo If you encounter any issues:
echo - Check Laravel logs: storage\logs\laravel.log
echo - Verify all files are uploaded correctly
echo - Check database connectivity
echo.
echo [SUCCESS] Quotation system is now live! 🚀
echo.
pause
