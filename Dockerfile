FROM php:8.4-apache

# 1. Instalar dependencias del sistema operativo
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libonig-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# 2. Instalar extensiones de PHP para Laravel
RUN docker-php-ext-install pdo pdo_mysql mysqli mbstring zip

# 3. Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite

# 4. Configurar Apache para que apunte directamente a la carpeta /public de Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# 5. Ajustar permisos para evitar bloqueos
RUN chown -R www-data:www-data /var/www/html
