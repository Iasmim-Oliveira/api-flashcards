FROM php:8.3-fpm

# Instala dependências
RUN apt-get update && apt-get install -y \
    zip unzip curl git libpng-dev libonig-dev libxml2-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html

# Permissões para pasta storage e bootstrap
RUN chown -R 1000:1000 /var/www \
    && chmod -R 775 /var/www

RUN chown -R 1000:1000 /var/www/html