FROM php:8.4-apache

# Instalar extensiones de PostgreSQL requeridas para conectar con Supabase
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql

# Habilitar mod_rewrite de Apache para las rutas de Laravel
RUN a2enmod rewrite

# Instalar Composer de forma global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar el código del proyecto al servidor de producción
WORKDIR /var/www/html
COPY . .

# Dar permisos a Apache sobre las carpetas de caché
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Redirigir el servidor Apache a la carpeta public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Instalar dependencias de producción optimizadas
RUN composer install --no-dev --optimize-autoloader

CMD php artisan migrate --force && apache2-foreground

EXPOSE 80

