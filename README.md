cambiar archivo.env
composer install
npm install
php artisan migrate:fresh
* rm public/storage
* php artisan storage:link