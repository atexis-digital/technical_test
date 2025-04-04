install_composer:
	curl -sS https://getcomposer.org/installer | php
	mv composer.phar /usr/local/bin/composer

	apt update
	apt install git -y
	apt install zip -y

	composer install


front_regenerate_vendors:
	-rm -Rf node_modules/
	npm i

back_regenerate_vendors:
	rm -Rf vendor/ composer.lock
	composer update