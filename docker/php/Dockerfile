FROM php:8.2-fpm-alpine

# Установка зависимостей
RUN apk add --no-cache $PHPIZE_DEPS curl git \
    && apk add --no-cache bash \
    && apk add --no-cache libpng libpng-dev \
    && apk add --no-cache libjpeg-turbo-dev \
    && apk add --no-cache freetype-dev

# Установка расширений PHP
RUN docker-php-ext-install pdo pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
