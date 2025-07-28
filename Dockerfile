FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip git curl libzip-dev libpq-dev mariadb-client

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Salin file project kecuali vendor
COPY . .

# Jangan salin vendor (pastikan ada di .dockerignore)

# Jalankan diagnose + install composer
RUN composer diagnose && composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Izin eksekusi untuk artisan
RUN chmod +x artisan

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
