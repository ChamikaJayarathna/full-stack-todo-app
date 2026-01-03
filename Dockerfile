# base image
FROM php:8.2-apache

# Apache reads from /var/www/html by default
WORKDIR /var/www/html

# Copy project files to Apache document root
COPY . /var/www/html

# Set permissions for www-data user (Apache user)
RUN chown -R www-data:www-data /var/www/html

# Install mysqli extension for PHP
RUN docker-php-ext-install mysqli

# Expose default HTTP port
EXPOSE 80
