:: Pre pokretanja start.bat potrebno je kreirati bazu "mgrujic"

call composer install --no-interaction

copy .env.example .env

php artisan key:generate

php artisan migrate:fresh

php artisan db:seed

php artisan storage:link

php artisan serve
