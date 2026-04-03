FROM php:8.2-apache

COPY . /var/www/html/

# Copy custom Apache config
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for clean URLs
RUN a2enmod rewrite

EXPOSE 80