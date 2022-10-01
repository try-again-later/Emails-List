# Emails list

Live version: [tal-emails-list.herokuapp.com](https://tal-emails-list.herokuapp.com).

## Run the app locally with PHP build-in server

```sh
git clone https://github.com/try-again-later/Emails-List
cd Emails-List
cp .env.example .env

# download dependencies and build the frontend
npm i
composer install
npm run build

# setup the database
docker-compose up -d mysql
DB_HOST=127.0.0.1 php artisan migrate:fresh --seed

# run the app
php artisan key:generate
DB_HOST=127.0.0.1 php artisan serve
```

The app will be available at [localhost:8000](http://localhost:8000).

## Run the app locally inside docker

```sh
git clone https://github.com/try-again-later/Emails-List
cd Emails-List
cp .env.example .env

# build and run the app
docker-compose up -d

# setup the database
docker exec emails-list-app php artisan migrate:fresh --seed
```

The app will be available at [localhost:8000](http://localhost:8000).
