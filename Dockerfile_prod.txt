# syntax=docker/dockerfile:1

FROM php:8.2-apache as final

ENV PORT=80
RUN echo "Listen ${PORT}" > /etc/apache2/ports.conf

RUN docker-php-ext-install pdo pdo_mysql
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# RUN sudo a2dismod worker
# RUN sudo service apache2 restart
# USER root
COPY ./src /var/www/html
USER www-data

ENTRYPOINT []
CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-enabled/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground
