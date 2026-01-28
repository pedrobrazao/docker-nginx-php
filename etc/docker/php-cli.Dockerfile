FROM php:8.5-cli

RUN pecl channel-update pecl.php.net && \
    pecl install xdebug-3.5.0 && \
    docker-php-ext-enable xdebug


    WORKDIR /app