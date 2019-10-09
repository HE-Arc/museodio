# museodio

## Small notes
To publish a package from Composer in order to access it via a public link, add this code to app/Providers/AppServiceProvider in the boot() function

```
$this->publishes([
  'vendor/leaflet' => public_path('vendor/leaflet'),
], 'public');
```

Then, in the console, run :

```
php artisan vendor:publish --tag=public --force
```
