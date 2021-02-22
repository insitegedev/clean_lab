# Clean Lab
Install the dependencies.

```sh
$ cd clean_lab
$ composer install
$ npm install
```


### For run migrations...


create .env file by .env.example


```sh

$ php artisan migrate

$ php artisan db:seed --class="LocalizationSeeder"
$ php artisan db:seed --class="PermissionsSeeder"

```

# Run Application
```sh
$ php artisan serve
```


