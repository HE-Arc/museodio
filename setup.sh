#!/bin/bash

composer update
php artisan vendor:publish --tag=public --force
php artisan migrate
php artisan db:seed
php artisan passport:install
