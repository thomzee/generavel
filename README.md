## Introduction
This package basically an API CRUD generator to boost your speed throughout laravel project development. You whether
generate all files required for your project or partial file.

## Installation
You can choose one of those two installation methods freely.
#### 1. Automatic Installation
Go into your project root folder laravel
```$xslt
cd YOUR_LARAVEL_ROOT_PROJECT/
``` 
then get the latest version of Generavel on your project with following command.
```$xslt
composer require thomzee/generavel
```
#### 2. Manual Installation
Alternatively, you can update your composer.json file, just like code below
```$xslt
"require": {
    . . .
    "thomzee/generavel": "1.*"
},
```
b. then run `composer install` command.
## Register Service
Firstly you need register the service provider your project configuration file `config/app.php`
```$xslt
'providers' => [
    . . .
    Thomzee\Generavel\GeneravelServiceProvider::class,
]
```
Run `composer dump-autoload` command to update changes in your project configuration file.
```$xslt
composer dump-autoload
```
## API CRUD Generator
Make sure Generavel commands is registered by running this command
```$xslt
php artisan list
```
these are commands you can try
```$xslt
php artisan generavel:all Flight
php artisan generavel:model Flight
php artisan generavel:controller FlightController
php artisan generavel:mapper FlightMapper
php artisan generavel:create-request Flight
php artisan generavel:update-request Flight
```
then simply adjust your model, controller, and form request.

## License
This package is open-sourced software licensed under the MIT license.
