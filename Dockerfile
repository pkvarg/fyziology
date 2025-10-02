FROM serversideup/php:8.2-fpm-nginx

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY --chown=www-data:www-data . /var/www/html

# Install Composer dependencies
RUN composer install --optimize-autoloader --no-dev

# Install Node dependencies and build assets
RUN npm install && npm run build && rm -rf node_modules

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
