FROM php:8-fpm


RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    zip \
    unzip
RUN docker-php-ext-install zip
