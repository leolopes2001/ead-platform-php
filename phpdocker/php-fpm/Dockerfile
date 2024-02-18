# FROM phpdockerio/php:8.1-fpm

# RUN apt-get update \
#     && apt-get install -y --no-install-recommends \
#         git \
#         php8.1-memcached \
#         php8.1-mysql \
#         php8.1-redis \
#         php8.1-xdebug \
#         curl \
#         zip \
#         unzip \
#         libicu-dev \
#         php-pear \
#     && apt-get clean \
#     && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
#     && pecl install xdebug \
#     && docker-php-ext-enable xdebug

# COPY ./90-xdebug.ini "${PHP_INI_DIR}/conf.d"

# WORKDIR "/app"





FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip \
    libicu-dev



RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql intl mysqli

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./90-xdebug.ini "${PHP_INI_DIR}/conf.d"

WORKDIR "/app"
