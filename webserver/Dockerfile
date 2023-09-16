# Dockerfile
# FROM php:8.0-apache
# FROM php:8.0.7-apache-buster
FROM php:8.2-apache

RUN apt-get clean
RUN apt-get update

ENV COMPOSER_ALLOW_SUPERUSER=1

# git, unzip & zip are for composer
RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    libzip-dev \
    zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
    a2enmod rewrite headers ssl proxy proxy_http 

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && apachectl restart
RUN docker-php-ext-install exif && docker-php-ext-enable exif
RUN apt-get update && apt-get install -y libmagickwand-dev --no-install-recommends && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip


# install imagick
# Version is not officially released https://pecl.php.net/get/imagick but following works for PHP 8
RUN mkdir -p /usr/src/php/ext/imagick; \
    curl -fsSL https://github.com/Imagick/imagick/archive/06116aa24b76edaf6b1693198f79e6c295eda8a9.tar.gz | tar xvz -C "/usr/src/php/ext/imagick" --strip 1; \
    docker-php-ext-install imagick;

# RUN apt install php8.0-gd

RUN a2enmod rewrite remoteip
RUN service apache2 restart 

#  a2enconf z-app

#EMAIL !
RUN \ 
apt-get update && apt-get install msmtp msmtp-mta mailutils -y 


# install SSL cert and activate SSL in apache
RUN mkdir /etc/apache2/ssl && a2enmod ssl

WORKDIR /var/www/html
EXPOSE 80 443