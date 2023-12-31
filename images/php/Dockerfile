FROM atreschilov/php-grpc:v0.1.4

RUN apt-get update && apt-get install g++ -y \
        cmake \
        protobuf-compiler

RUN pecl install xdebug-3.3.1 \
   && docker-php-ext-enable xdebug

ADD ./php.ini /usr/local/etc/php

# Install composer
RUN apt-get update
RUN apt-get install -y \
    git

RUN cd /tmp/grpc \
    && git submodule update --init

RUN cd /tmp/grpc \
    && mkdir -p cmake/build \
    && cd cmake/build \
    && cmake ../.. \
    && make protoc grpc_php_plugin

WORKDIR /var

CMD ["php-fpm"]
