FROM php:7.4-fpm

WORKDIR /app

COPY . .

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

CMD ["php-fpm"]

EXPOSE 9000
