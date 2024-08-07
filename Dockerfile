FROM php:8.2-apache@sha256:e8ed150225f643bbf7dcdb5d2ba90963d429b1a98cb63552192c909732154858

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN sed -i 's/expose_php = On/expose_php = Off/' "$PHP_INI_DIR/php.ini"

RUN sed -i 's/ServerTokens OS/ServerTokens Prod/' /etc/apache2/conf-enabled/security.conf

RUN sed -i 's/ServerSignature On/ServerSignature Off/' /etc/apache2/conf-enabled/security.conf

RUN apt-get update

RUN apt-get install libicu-dev -y

RUN docker-php-ext-configure intl

RUN docker-php-ext-install intl

RUN docker-php-ext-configure mysqli

RUN docker-php-ext-install mysqli

RUN docker-php-ext-configure opcache

RUN docker-php-ext-install opcache

RUN a2enmod rewrite

COPY --chown=www-data src/ /var/www/html/
