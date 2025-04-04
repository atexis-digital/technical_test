

front_regenerate_vendors:
	-rm -Rf node_modules/
	npm i

back_regenerate_vendors:
	rm -Rf vendor/ composer.lock
	composer update