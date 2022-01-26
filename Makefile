start: docker-compose-up

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

code-sniffer:
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "vendor/bin/phpcs --standard=PSR12 examples/ src/ --ignore=*/src/Library/*"

get-from-proto:
	docker exec -it tinkoff_invest_sdk_php /bin/bash -c "protoc --proto_path=/var/contracts --php_out=/var/src/Library  --plugin=protoc-gen-grpc=/tmp/grpc/cmake/build/grpc_php_plugin --grpc_out=/var/src/Library /var/contracts/*.proto"