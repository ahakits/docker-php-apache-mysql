FROM php:7.2-apache

COPY php.ini $PHP_INI_DIR/conf.d/
COPY apache2.conf /etc/apache2/
COPY sites-available /etc/apache2/sites-available/
COPY sites-enabled /etc/apache2/sites-enabled/

RUN apt-get update && \
        docker-php-source extract && \
        apt-get install -y ssl-cert libmemcached-dev zlib1g-dev && \
        a2enmod ssl rewrite && \
        a2ensite default-ssl && \
        docker-php-ext-install pdo_mysql mbstring

# Pecl Install
RUN pecl install redis memcached xdebug && \
        docker-php-ext-enable redis memcached xdebug

RUN rm -rf /tmp/pear

WORKDIR /var/www/html
COPY application/ /var/www/html/

