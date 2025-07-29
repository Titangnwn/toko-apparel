# Gunakan PHP 8.3 dengan FPM
FROM php:8.3-fpm

# Install dependensi sistem & ekstensi PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip git curl libzip-dev libpq-dev mariadb-client \
    libicu-dev && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Copy Composer dari image resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set direktori kerja
WORKDIR /var/www/html

# Copy semua file project
COPY . .

# Install dependency Laravel (no-dev untuk production)
RUN composer install --no-dev --optimize-autoloader

# Set permission folder Laravel
RUN chmod -R 755 /var/www/html && chmod -R 775 storage bootstrap/cache

# Jalankan server Laravel di port 8080
CMD php artisan serve --host=0.0.0.0 --port=8080

RUN chmod +x artisan
