# Museodio
## How to setup development environment

Firstly, clone the project using the method of your choice. Then, you need to copy .env.example to .env and modify it accordingly to your setup.

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

This step is optional but recommended, it allows to seed the tables with random values.
```
php artisan db:seed
```

You need then to install Passport, which will create clients for token generation
```
php artisan passport:install
```

At last serve the project
```
php artisan serve
```

Normally, you should be able to see your project at http://yourURL/public/

## Generate documentation

```
php artisan apidoc:generate
```

The documentation generation requires a lot of parametrization such as the parameters to be send along with the request.
This parametrization can be done in config/apidoc.php.

The documentation is in ressources/docs/source/index.md.

## Small notes
To publish a package from Composer in order to access it via a public link, add this code to app/Providers/AppServiceProvider in the boot() function

```
$this->publishes([
  'vendor/leaflet' => public_path('vendor/leaflet'),
], 'public');
```

## More documentation

![Wiki](https://github.com/HE-Arc/museodio/wiki)
