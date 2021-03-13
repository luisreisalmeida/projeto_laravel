FROM php:7.3-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_mysql zip csv intl calendar gd xdebug-3.0.2 && \
    a2enmod rewrite && \
    service apache2 restart

RUN usermod --non-unique --uid 1000 www-data
RUN usermod -s /bin/bash www-data
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
