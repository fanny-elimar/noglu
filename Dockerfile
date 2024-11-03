# syntax=docker/dockerfile:1

FROM php:8.2-apache as final

RUN docker-php-ext-install pdo pdo_mysql
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY ./src /var/www/html
USER www-data
EXPOSE 80