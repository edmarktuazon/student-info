FROM php:8.0-fpm

RUN apt-get update && \
    apt-get install -y libzip-dev zip unzip git && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install --no-dev --no-scripts

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

CMD php artisan serve --host 0.0.0.0 --port $PORT
