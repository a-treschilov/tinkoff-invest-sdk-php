FROM php:8.0.15-fpm

RUN apt-get update && apt-get install g++ -y \
        libzip-dev \
        nano \
        cmake \
        protobuf-compiler \
    && docker-php-ext-install zip

RUN pecl install xdebug-3.1.4 \
   && docker-php-ext-enable xdebug

RUN pecl install grpc \
    && docker-php-ext-enable grpc

ADD ./php.ini /usr/local/etc/php

# Install composer
RUN apt-get update
RUN apt-get install -y \
    git

RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer

RUN cd /tmp \
    && git clone -b v1.43.0 --depth 1 https://github.com/grpc/grpc \
    && cd grpc \
    && git submodule update --init

RUN cd /tmp/grpc \
    && mkdir -p cmake/build \
    && cd cmake/build \
    && cmake ../.. \
    && make protoc grpc_php_plugin

WORKDIR /var

CMD ["php-fpm"]
