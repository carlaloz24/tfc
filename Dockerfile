# Utilizar una imagen base de PHP con dependencias necesarias
FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_pgsql pgsql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www

# Copiar el código de la aplicación
COPY . .

# Instalar las dependencias de Composer
RUN composer install --optimize-autoloader --no-dev

# Copiar el archivo .env.example a .env
COPY .env.example .env

# Generar la clave de la aplicación
RUN php artisan key:generate

# Configurar permisos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponer el puerto 9000 para PHP-FPM
EXPOSE 9000

# Iniciar PHP-FPM
CMD ["php-fpm"]
