FROM php:8.1-fpm-alpine3.19

WORKDIR /retail-api

RUN apk update && apk add --no-cache \
    autoconf \
    g++ \
    make \
    curl \
    icu-dev \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    git \
    brotli-dev \
    zip \
    unzip \
    linux-headers && \
    rm -rf /var/cache/apk/*

RUN docker-php-ext-configure intl && \
    docker-php-ext-install -j$(nproc) pdo_mysql opcache pcntl bcmath gd intl sockets zip exif

RUN pecl install swoole && docker-php-ext-enable swoole

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY composer.json composer.lock artisan /retail-api/

COPY bootstrap/app.php /retail-api/bootstrap/app.php

RUN composer install --no-dev --optimize-autoloader || true

COPY . /retail-api

RUN composer dump-autoload --optimize

CMD ["php", "artisan", "octane:start", "--host=0.0.0.0", "--port=8000"]
