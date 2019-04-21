# For development, simply run:
#
# $ docker build -t poti .
# $ docker run -it -p 80:80 --rm -v $(PWD)/potiboard:/var/www/html poti
FROM php:7.3-apache-stretch

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
