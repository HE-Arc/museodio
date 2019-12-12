#!/bin/bash

php artisan vendor:publish --tag=public --force
php artisan migrate:fresh
php artisan db:seed
php artisan passport:install
