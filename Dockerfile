FROM php:7.4-apache
COPY 000-default.conf /etc/apache2/sites-available
Run cd /var/www/html
RUN composer install