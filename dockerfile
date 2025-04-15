FROM php:8.2-apache

# Instalace potřebných balíčků
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Nastavme DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Povolit mod_rewrite pro Laravel
RUN a2enmod rewrite

# Zkopíruj vše
COPY . /var/www/html

# Nastav práva
RUN chown -R www-data:www-data /var/www/html

# Instaluj závislosti
RUN composer install --no-dev --optimize-autoloader

# Cache konfigurace
RUN php artisan config:cache
