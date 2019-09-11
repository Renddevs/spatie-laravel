# spatie-laravel
Laravel 5.8

Before use this project please :
1. install the package via composer 
   => composer require spatie/laravel-permission
2. you must publish the migration
   => php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
3. after the migration has been published you can create the role and permission by running migration
   => php artisan migrate
4. then you can publish the config with
   => php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"


source : https://docs.spatie.be/laravel-permission/v3/introduction/


