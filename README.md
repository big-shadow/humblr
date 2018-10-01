# Humblr
The Developer's Reference. :)

## Getting Started
Here are some quick links to explore things in depth.

1. [Laravel 5.5](https://laravel.com/docs/5.5)
2. [Migrations](https://laravel.com/docs/5.5/migrations)
3. [Git Configuration](https://github.com/ray-winkelman/git-configuration)

### Environment
1. Git (It's recommended to use [this](https://github.com/ray-winkelman/git-configuration) Git configuaration - Replace the name/email with your own)
2. Meld mergetool (or tool of choice)
3. libgnome-keyring (optional) (Linux only)
4. PHP >= 7.0.0
5. OpenSSL PHP Extension (optional)
6. PDO PHP Extension (Uncomment in /etc/php/php.ini)
7. Mbstring PHP Extension (optional)
8. Tokenizer PHP Extension (optional)
9. XML PHP Extension (optional)
10. MySQL or MariaDB(preferred) (optional)
11. Composer

### Config
Grab the `laravel` program (not the framework) with composer.

```
composer global require "laravel/installer"
```

Add the composer executable to your path so the `laravel` command can be executed anywhere on your machine.

In my case:
```
/home/rw/.config/composer/vendor/bin
```

#### Laravel Conf.
Check out the `.env.example` file to configure your enviroment. Rename this to `.env` (This file is git ignored)

#### Database Conf.
You CAN install MySQL or MariaDB but's recommended to offload the overhead to our development DB instances. Laravel's migrations mean we won't be writing SQL, anyway!

Copy this to your `.env`
```
DB_CONNECTION=mysql
DB_HOST=mkybox.com
DB_PORT=3306
DB_DATABASE=ray_roomservicedev1
DB_USERNAME=ray_roomservice
DB_PASSWORD=Roomservice123!
```

Shoot me (Ray) an e-mail for phpMyAdmin creds - if you need them.

### Migrate (If local DB)
If you have a local DB connection, or empty database, run `php artisan migrate` to deploy the database.

### Serve
This command will start a development server at http://localhost:8000

```
php artisan serve
```
No need for Apache!

###API Docs
The API docs are manually generated and can be viewed locally at:
```
http://humbler.localhost:{port}/docs/index.html
```
To update the docs run:
```
php artisan api:generate --routePrefix="api/*" --useMiddlewares --actAsUserId=1
```

###Subdomaining
To use a TLD other than `.localhost` add the following to `/etc/hosts`:
```
127.0.0.1 humbler.dev demo.humbler.dev
```

To match all `.dev` subdomains, you could install `dnsmasq` then: (on Arch Linux)

```
echo "address=/humbler.dev/127.0.0.1" >> /etc/dnsmasq.conf
sudo systemctl restart dnsmasq.service
```
