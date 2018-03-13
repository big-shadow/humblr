#!/bin/bash

cd ../API/
php artisan cache:clear >> /dev/null
composer dump-autoload -o >> /dev/null
composer update >> /dev/null
php artisan migrate:fresh --seed >> /dev/null
echo "Password Client" | php artisan passport:client --password
php artisan queue:work --tries=3 --sleep=3