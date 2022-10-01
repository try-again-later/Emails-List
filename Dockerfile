FROM node:18-bullseye AS frontend-assets
WORKDIR /tmp/
COPY . .
RUN \
    npm i && \
    npm run build


FROM php:8.1-apache-bullseye

RUN \
    apt update && \
    apt install -y curl git unzip zip && \
    docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN \
    a2dissite 000-default.conf && \
    rm -r /var/www/html/

WORKDIR /var/www/html/
COPY . .

COPY ./app.conf /etc/apache2/sites-available/app.conf
RUN \
    a2ensite app.conf && \
    a2enmod rewrite

COPY --from=frontend-assets /tmp/public/build/ /var/www/html/public/build/

RUN composer install

RUN chown -R www-data:www-data /var/www/html/
USER www-data

RUN php artisan key:generate
