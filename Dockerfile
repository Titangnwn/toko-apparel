FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip git curl libzip-dev libpq-dev mariadb-client \
    libicu-dev && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chmod -R 755 /var/www/html && chmod -R 775 storage bootstrap/cache

CMD php -S 0.0.0.0:8080 -t public
