#!/bin/bash

cd httpdocs/humblr.market/API

if pgrep "artisan" > /dev/null
then
    /opt/plesk/php/7.1/bin/php artisan queue:restart
else
    /opt/plesk/php/7.1/bin/php artisan queue:work --tries=3 --sleep=3
fi