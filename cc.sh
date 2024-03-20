#!/bin/bash

# Navigate to your Laravel project directory
# cd /path/to/your/laravel/project

echo "Clearing all Laravel caches..."

# Clear application cache
php artisan cache:clear

# Clear route cache
php artisan route:clear

# Clear config cache
php artisan config:clear

# Clear compiled views
php artisan view:clear

# Clear optimized class loader
php artisan optimize:clear

echo "All caches have been cleared successfully."

