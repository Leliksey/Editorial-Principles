FROM php:8.2-apache

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем Laravel-проект в /var/www/html
COPY . /var/www/html

# Устанавливаем права
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Включаем mod_rewrite для Laravel
RUN a2enmod rewrite

# Настраиваем Apache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# Устанавливаем зависимости Laravel
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
