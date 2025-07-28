# Gunakan image PHP resmi + ekstensi
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    mariadb-client

# Install ekstensi PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Buat folder kerja
WORKDIR /var/www/html

# Salin semua isi project
COPY . .

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Izin eksekusi untuk artisan
RUN chmod +x artisan

# Jalankan Laravel di port 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

# Generate APP_KEY jika belum ada
RUN php artisan key:generate

# Cache config dan route
RUN php artisan config:cache
RUN php artisan route:cache
