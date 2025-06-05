# Usa una imagen oficial PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Instala composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código al contenedor
COPY . /var/www/html/

# Cambia permisos (puedes ajustar según tu proyecto)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instala dependencias composer
RUN composer install --no-dev --optimize-autoloader

# Habilita mod_rewrite para Laravel
RUN a2enmod rewrite

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar apache en foreground
CMD ["apache2-foreground"]
