![alt text](storage/app/public/assets/images/logo/text-indigo.png)

## About Laravel Skeleton
Laravel Skeleton is a turnkey solution based on the Laravel framework to start developing without having to install dozens of packages and spend time configuring your project

it includes :

 - Authentication based on older versions of Laravel without using Laravel Breeze or Fortify.
 - A functional and flexible Acl without a package.
 - [Tailwind](https://tailwindcss.com/) ready to use, configured with [jit](https://www.npmjs.com/package/@tailwindcss/jit).
 - integration of [cypress](https://github.com/laracasts/cypress) for e2e testing.
 - new commands to improve your performance.
 - Ready to use [Laravel Telescope](https://laravel.com/docs/8.x/telescope).
 - [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) and [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper) packages.
 - Translation using the [Laravel Lang](https://github.com/Laravel-Lang/lang) package.
 - lightweight packages for the fontend such as [Alpine](https://github.com/alpinejs/alpine), [Axios](https://github.com/axios/axios), [Luxon](https://github.com/moment/luxon), [Turbolinks](https://github.com/turbolinks/turbolinks).

## Installation

run these commands :

```shell
npm i
composer install --optimize-autoloader --no-dev
sudo chown -R $USER:www-data storage storage/logs bootstrap/cache
sudo chmod -R 775 storage storage/logs bootstrap/cache
```

copy ``.env.example`` file to ``.env`` and configure it
don't forget to set ``APP_DEBUG`` to **false** and run these commands :

## Production

run these commands :

```shell
php artisan migrate:fresh
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Launch queue with this command : ``php artisan queue:work --queue=high,default``
