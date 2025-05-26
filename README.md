Instalacija projekta:

git clone https://github.com/mgrujic5919s/mgrujic.git

cd mgrujic

composer install

npm install

cp .env.example .env

php artisan migrate:fresh

php artisan db:seed

php artisan key:generate

php artisan storage:link

php artisan serve
