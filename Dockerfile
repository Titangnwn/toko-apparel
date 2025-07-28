# Gunakan image PHP resmi + ekstensi
FROM php:8.3-fpm

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
    mariadb-client \
    libicu-dev        

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Buat folder kerja
WORKDIR /var/www/html

# Salin file project (kecuali yg di .dockerignore)
COPY . .

# Copy env contoh agar tidak error saat build
RUN cp .env.example .env

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Generate APP_KEY (opsional saat build)
# RUN php artisan key:generate

# Izin artisan
RUN chmod +x artisan

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
