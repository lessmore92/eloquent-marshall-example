# eloquent-marshall-example
How to use Eloquent Marshall in real project

#How to run
```
composer install
php -r "copy('.env.example', '.env');"
php artisan key:generate
php artisan storage:link
```

Create a new database named `eloquent-marshall-example`

`php artisan migrate --seed`
