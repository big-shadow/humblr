#!/bin/bash

cd ../API/
php artisan migrate:fresh --seed >> /dev/null
echo "Password Client" | php artisan passport:client --password