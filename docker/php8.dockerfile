FROM php:8.0-fpm-alpine

RUN apk add --no-cache curl git sqlite-dev

RUN docker-php-ext-install -j$(nproc) pdo_sqlite

RUN curl -sS https://install.phpcomposer.com/installer | php && \
    mv composer.phar /usr/local/bin/composer

RUN addgroup --gid 1000 composer && \
    adduser --disabled-password --ingroup composer --uid 1000 composer

CMD ["php-fpm"]
