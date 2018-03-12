#!/bin/bash

cd ../API/
/opt/plesk/php/7.1/bin/php /composer.phar install
/opt/plesk/php/7.1/bin/php artisan cache:clear
/opt/plesk/php/7.1/bin/php /composer.phar dump-autoload -o
/opt/plesk/php/7.1/bin/php /composer.phar update
/opt/plesk/php/7.1/bin/php artisan migrate