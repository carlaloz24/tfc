FROM php:8.2-fpm

# Instala dependencias del sistema necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    mariadb-client \
    && docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl gd

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia tu aplicación
COPY . /var/www

# Establece el directorio de trabajo
WORKDIR /var/www

# Instala dependencias de Laravel
RUN composer install --optimize-autoloader --no-dev

# Asigna permisos
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# Expone el puerto
EXPOSE 9000

# Inicia PHP-FPM
CMD ["php-fpm"]
