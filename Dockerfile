FROM php:7.4-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Copy project files
COPY . /var/www/html/

# Give permission (important for PHP apps)
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80
