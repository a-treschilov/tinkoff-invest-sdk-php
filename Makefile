VERSION=main

start: docker-compose-up

api-init: submodule-init get-from-proto

api-update: submodule-update get-from-proto

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
	cd contracts && git fetch && git checkout $(VERSION) && git pull

update-ssl-certificate:
	openssl s_client -connect invest-public-api.tinkoff.ru:443 -servername invest-public-api.tinkoff.ru -showcerts </dev/null | openssl x509 -outform PEM > etc/tinkoff-ru.pem

check-ssl-certificate:
	openssl x509 -in /Users/a.treschilov/Projects/tinkoff-invest-sdk-php/etc/tinkoff-ru.pem -text -noout | grep -E "(Subject|Issuer|Not Before|Not After)"