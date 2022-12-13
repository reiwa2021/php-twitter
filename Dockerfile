FROM php:7.4-apache
COPY 000-default.conf /etc/apache2/sites-available
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
COPY . /var/www/html
RUN cd /var/www/html
RUN ls
RUN composer install