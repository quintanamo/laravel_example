## Building the application
1. Ensure there is a .env file
2. composer install
3. php artisan key:generate
4. npm install
5. npm run build

## Generating Models
php artisan make:model ModelName

## Generating Controllers
php artisan make:controller ModelNameController

## Migrations
### Create, Run, and Apply Migrations
- Ensure the database is defined in the .env file
- php artisan migrate:install
- php artisan make:migration migration_name
- php artisan migrate

### Undoing Migrations
- php artisan migrate:rollback
- php artisan migrate:reset

### Seed Database
php artisan db:seed