# Run the app locally

```sh
cp .env.example .env

# setup the database
docker-compose up -d postgres
php artisan migrate:fresh --seed

# download dependencies and build the frontend
npm i
composer install
npm run build

# run the app
php artisan serve
```
