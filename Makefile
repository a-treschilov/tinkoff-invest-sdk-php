VERSION=V1.24

start: docker-compose-up

api-update: submodule-init get-from-proto

api-init: submodule-update get-from-proto

docker-compose-up:
	docker-compose up -d --build

composer-install:
	echo "Composer install start"
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "composer install"
	echo "Composer install end"

composer-update:
	echo "Composer update start"
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "composer update"
	echo "Composer update end"

composer-outdated:
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "composer outdated --direct"

code-sniffer:
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "vendor/bin/phpcs --standard=PSR12 examples/ src/ --ignore=*/src/Library/*"

get-from-proto:
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "protoc --experimental_allow_proto3_optional --proto_path=/var/contracts/src/docs/contracts --php_out=/var/src/Library  --plugin=protoc-gen-grpc=/tmp/grpc/cmake/build/grpc_php_plugin --grpc_out=/var/src/Library /var/contracts/src/docs/contracts/*.proto"

submodule-init:
	git submodule update --init

submodule-update:
	cd contracts && git fetch && git checkout $(VERSION)