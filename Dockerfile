FROM php:8.4-apache

# Instalar extensiones de PostgreSQL requeridas para conectar con Supabase
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite de Apache para las rutas de Laravel
RUN a2enmod rewrite

# Instalar Composer de forma global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Redirigir el servidor Apache a la carpeta public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Permisos iniciales
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

# Forzamos a que el contenedor inicie Apache pase lo que pase
CMD ["apache2-foreground"]
