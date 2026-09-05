VERSION=master

start: docker-compose-up

api-init: submodule-init get-from-proto

api-update: submodule-update get-from-proto

docker-compose-up:
	docker-compose up -d --build

# No -it anywhere in this file: none of these commands read stdin or need a real TTY for their
# output, and `docker exec -it` hard-fails ("stdin is not a terminal") in CI and whenever an agent
# runs a target — which is every target here, not just the quality gates.
composer-install:
	echo "Composer install start"
	docker exec tinkoff_invest_sdk_php /bin/bash -c "composer install"
	echo "Composer install end"

composer-update:
	echo "Composer update start"
	docker exec tinkoff_invest_sdk_php /bin/bash -c "composer update"
	echo "Composer update end"

composer-outdated:
	docker exec tinkoff_invest_sdk_php /bin/bash -c "composer outdated --direct"

# PSR1.Files.SideEffects is excluded: runnable example scripts legitimately mix a top-level
# `require autoload.php` with a declared helper function, which the sniff treats as a violation.
code-sniffer:
	docker exec tinkoff_invest_sdk_php /bin/bash -c "vendor/bin/phpcs --standard=PSR12 examples/ src/ tests/ --ignore=*/src/Library/* --exclude=PSR1.Files.SideEffects"

test:
	docker exec tinkoff_invest_sdk_php /bin/bash -c "vendor/bin/phpunit --colors=always"

get-from-proto:
	docker exec tinkoff_invest_sdk_php /bin/bash -c "protoc --experimental_allow_proto3_optional --proto_path=/var/contracts/src/docs/contracts --php_out=/var/src/Library  --plugin=protoc-gen-grpc=/tmp/grpc/cmake/build/grpc_php_plugin --grpc_out=/var/src/Library /var/contracts/src/docs/contracts/*.proto"

submodule-init:
	git submodule update --init

submodule-update:
	cd contracts && git fetch && git checkout $(VERSION) && git pull

# etc/tbank.pem is now a CA trust bundle (Минцифры + public roots), not a single pinned
# leaf — do NOT overwrite it with a single server cert. This target only fetches the current
# leaf for inspection; review manually before touching etc/tbank.pem.
inspect-ssl-certificate:
	openssl s_client -connect invest-public-api.tbank.ru:443 -servername invest-public-api.tbank.ru -showcerts </dev/null | openssl x509 -outform PEM -text -noout | grep -E "(Subject|Issuer|Not Before|Not After)"

check-ssl-certificate:
	awk 'BEGIN{RS="-----END CERTIFICATE-----\n"} /BEGIN CERTIFICATE/{print $$0 "-----END CERTIFICATE-----"}' \
		etc/tbank.pem \
		| openssl storeutl -noout -text -certs /dev/stdin \
		| grep -E "(Subject:|Issuer:|Not Before|Not After)"