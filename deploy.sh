#!/bin/bash

echo "Running post-deployment commands..."

# Generate app key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating APP_KEY..."
    php artisan key:generate --force
fi

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if needed
php artisan storage:link

echo "Deployment complete!"
