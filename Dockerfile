FROM php:7.4-apache
COPY 000-default.conf /etc/apache2/sites-available
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
RUN cd /var/www/html
RUN composer  update --no-scripts