# RoomService
The Developer's Reference. :)

## Getting Started
Here are some quick links to explore things in depth.

Laravel 5.5: https://laravel.com/docs/5.5

### Environment
1. Git
2. Meld mergetool (or tool of choice)
3. libgnome-keyring (optional)
4. PHP >= 7.0.0
4.1. OpenSSL PHP Extension
4.2. PDO PHP Extension
4.3. Mbstring PHP Extension
4.4. Tokenizer PHP Extension
4.5. XML PHP Extension
5. MySQL or MariaDB(preferred) OPTIONAL
6. Composer

### Config
Grab the `laravel` program (not the framework) with composer.

`composer global require "laravel/installer"`

Add the composer executable to your path so the `laravel` command can be executed anywhere on your machine.

In my case:
/home/rw/.config/composer/vendor/bin/

#### Laravel Conf.
Check out the .env.example file to configure your enviroment. Rename this to .env (This file is git ignored)

#### Database Conf.
You CAN install MySQL or MariaDB but's recommended to offload the overhead to our development DB instances. Laravel's migrations mean we won't be writing SQL, anyway!

https://sumac.websavers.ca:3306

DB: roomservicedev, roomservicedev2
User: roomservice
Pass: Roomservice123!

Shoot me (Ray) an e-mail for phpMyAdmin creds - if you need them.

### Serve
This command will start a development server at http://localhost:8000

`php artisan serve`

No need for Apache!