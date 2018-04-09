FROM php:7.2-apache

COPY php.ini $PHP_INI_DIR/conf.d/

COPY apache2.conf /etc/apache2/
COPY sites-available /etc/apache2/sites-available/
COPY sites-enabled /etc/apache2/sites-enabled/

RUN apt-get update
RUN docker-php-source extract

# Enable ssl
RUN apt-get install -y ssl-cert
RUN a2enmod ssl
RUN a2ensite default-ssl

# Enable mod_rewrite
RUN a2enmod rewrite

# Install PDO
RUN docker-php-ext-install pdo_mysql

# Install mbstring
RUN docker-php-ext-install mbstring

# Install memcached
RUN apt-get install -y libmemcached-dev zlib1g-dev
RUN pecl install memcached && \
        docker-php-ext-enable memcached

# Install redis
RUN pecl install redis && \
        docker-php-ext-enable redis

# Install xdebug
RUN pecl install xdebug && \
        docker-php-ext-enable xdebug

RUN rm -rf /tmp/pear
