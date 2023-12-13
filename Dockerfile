FROM php:8.1-fpm

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql

WORKDIR /app

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]