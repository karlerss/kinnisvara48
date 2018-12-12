### Prerequisites:

- php
- sqlite extension enabled
- composer
- yarn

### Set-up

1. Clone this repo
1. Create .env and sqlite (`touch /path/to/db.sqlite`, DB_CONNECTION=sqlite, DB_DATABASE=/path/to/db.sqlite)
1. `composer install`
1. `yarn`
1. `php artisan migrate`
1. `php artisan db:seed --class=ListingSeeder`
1. `yarn run watch`
1. `php artisan serve`