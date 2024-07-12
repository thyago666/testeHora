
FROM php:7.4-apache


RUN apt-get update \
    && apt-get install -y libzip-dev zip unzip \
    && docker-php-ext-install zip pdo pdo_mysql


RUN a2enmod rewrite


COPY . /var/www/html


RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache


EXPOSE 80
