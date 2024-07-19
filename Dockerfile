FROM php:8.2-apache

RUN apt update

RUN apt install libicu-dev -y

RUN docker-php-ext-configure intl

RUN docker-php-ext-install intl

RUN a2enmod rewrite

COPY --chown=www-data src/ /var/www/html/
