FILE_WEBPACK=webpack.mix.js

install-common:
	cp .env.example .env

install-dev: install-common resources-dev sail-install webpack
	php artisan key:generate

install-prod: install-common resources-prod
	php artisan key:generate

webpack:
	echo "const mix = require('laravel-mix');" | tee $(FILE_WEBPACK) > /dev/null
	echo "mix.webpackConfig({ stats: { children: true, }, });" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.js('resources/js/app.js', 'public/js');" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.sass('resources/sass/app.scss', '/public/css');" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.browserSync({ proxy: 'localhost', open: false });" | tee -a $(FILE_WEBPACK) > /dev/null
	rm -rf ./resources/css
	mkdir ./resources/sass || true
	touch ./resources/sass/app.scss
	npm install browser-sync browser-sync-webpack-plugin --save-dev --legacy-peer-deps
	npm install sass-loader sass resolve-url-loader --save-dev --legacy-peer-deps

sail-install:
	npm install sail
	php artisan sail:install --with mariadb

sail-build:
	./vendor/bin/sail build

sail-up:
	./vendor/bin/sail up -d

sail-down:
	./vendor/bin/sail down

watch:
	npm run watch

resources-prod:
	composer install --no-dev
	npm install --production

resources-dev:
	composer install
	npm install
	npm run dev
