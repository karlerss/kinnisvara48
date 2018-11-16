Käivitamine eeldab, et arvutis on php.

1. klooni repo
1. seadista .env ja sqlite (`touch /path/to/db.sqlite`, DB_CONNECTION=sqlite, DB_DATABASE=/path/to/db.sqlite)
1. `composer install`
1. `yarn`
1. `php artisan migrate`
1. `php artisan db:seed --class=ListingSeeder`
1. `yarn run watch`
1. `php artisan serve`