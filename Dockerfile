# Gunakan image PHP 8.3 dengan FPM
FROM php:8.3-fpm

# Install dependensi sistem dan ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip git curl libzip-dev libpq-dev mariadb-client \
    libicu-dev && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Salin Composer dari image resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set direktori kerja dalam container
WORKDIR /var/www/html

# Salin semua file project ke container
COPY . .

# Install dependency Laravel tanpa dev dan optimize autoloader
RUN composer install --no-dev --optimize-autoloader

# Bersihkan cache Laravel (penting setelah salin file & .env)
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

# Set izin ke direktori penting Laravel
RUN chmod -R 755 /var/www/html \
    && chmod -R 775 storage bootstrap/cache \
    && chmod +x artisan

# Jalankan Laravel dengan php artisan serve di port 8080
CMD php artisan serve --port=8080
