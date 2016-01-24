#!/bin/sh

# copy .env file
cp .env.dist .env

# cache configuration
php artisan route:clear
php artisan route:cache
php artisan queue:restart

exit 0;
