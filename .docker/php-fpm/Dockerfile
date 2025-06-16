FROM php:8.3-fpm

RUN apt update && apt install -y mc nano git curl zip unzip libfreetype6-dev \
    libjpeg62-turbo-dev libpng-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mysqli zip mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www
COPY --chown=www:www . /var/www

WORKDIR /var/www

RUN git config --global --add safe.directory /var/www

USER www
