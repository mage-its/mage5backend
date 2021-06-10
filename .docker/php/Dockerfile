FROM php:7.2.2-apache

COPY . /var/www/html
COPY .docker/php/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
&& a2enmod rewrite \
&& docker-php-ext-install mysqli pdo pdo_mysql
