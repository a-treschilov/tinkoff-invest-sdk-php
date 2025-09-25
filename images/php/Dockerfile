FROM atreschilov/php-grpc:v0.2.2

RUN apt-get update && apt-get install g++ -y \
    cmake \
    protobuf-compiler

RUN pecl install xdebug-3.4.5 \
    && docker-php-ext-enable xdebug

ADD ./php.ini /usr/local/etc/php

# Install composer
RUN apt-get update
RUN apt-get install -y \
    git

ARG GRPC_VERSION=v1.75.0

# Fetch gRPC sources required to build the protoc plugins
RUN git clone --depth 1 --branch ${GRPC_VERSION} --recurse-submodules https://github.com/grpc/grpc /tmp/grpc

RUN cd /tmp/grpc \
    && git submodule update --init

RUN cd /tmp/grpc \
    && mkdir -p cmake/build \
    && cd cmake/build \
    && cmake ../.. \
    && make protoc grpc_php_plugin

WORKDIR /var

CMD ["php-fpm"]
