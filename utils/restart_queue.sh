#!/bin/bash

cd ../API/

if pgrep "artisan" > /dev/null
then
    /opt/plesk/php/7.1/bin/php artisan queue:restart
else
    /opt/plesk/php/7.1/bin/php artisan queue:work --queue=high,default --tries=3 --sleep=3 --daemon
fi