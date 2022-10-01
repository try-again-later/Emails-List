# Emails list

Live version: [tal-emails-list.herokuapp.com](https://tal-emails-list.herokuapp.com).

## Run the app locally with PHP build-in server

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

## Run the app locally inside docker

```sh
cp .env.example .env

# build and run the app
docker-compose up -d

# setup the database
docker exec -d emails-list-app php artisan migrate:fresh --seed
```

The app will be available at [localhost:8000](http://localhost:8000).
