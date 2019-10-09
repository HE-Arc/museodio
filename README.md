# Museodio
## How to setup development environment

Firstly, clone the project using the method your choice. Then, you need to copy .env.example to .env and modify it accordingly to your setup.

`cp .env.example .env`

Next, update the dependencies :
```
composer update
```

In order for the map to work, the publishment of a package is required. Please enter the following command :
```
php artisan vendor:publish --tag=public --force
```

Next step is to create the database. To do so, please type :
```
php artisan migrate
```

Normally, you should be able to see your project at http://yourURL/public/

## Small notes
To publish a package from Composer in order to access it via a public link, add this code to app/Providers/AppServiceProvider in the boot() function

```
$this->publishes([
  'vendor/leaflet' => public_path('vendor/leaflet'),
], 'public');
```
