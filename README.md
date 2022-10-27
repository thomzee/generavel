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
    "thomzee/generavel": "dev-master"
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
and the facade as well in same file.
```$xslt
'aliases' => [
    . . .
    'Generavel' => Thomzee\Generavel\Facades\Genervel::class,
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

then generate a mapper file with artisan command, example:
```$xslt
php artisan make:mapper UserMapper
```
these are commands you can try
```$xslt
php artisan generavel:all
php artisan generavel:model
php artisan generavel:controller
php artisan generavel:mapper
php artisan generavel:create-request
php artisan generavel:update-request
```
then simply adjust your model, controller, and form request.

## License
This package is open-sourced software licensed under the MIT license.
