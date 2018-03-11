#!/bin/bash

cd ../API/
php artisan cache:clear
composer dump-autoload -o
composer update
php artisan migrate:fresh --seed >> /dev/null
echo "Password Client" | php artisan passport:client --password
php artisan queue:work --queue=high,default --tries=3 --sleep=3