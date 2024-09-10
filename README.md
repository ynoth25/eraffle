## About ERaffle

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

# Setup
Clone repository
https://github.com/laravel/laravel.git

docker-compose build (Assuming Docker is already installed)

docker-compose up
## Fix Laravel startup issue
docker-compose exec app composer install --no-dev --optimize-autoloader

docker-compose exec app php artisan key:generate
### In case session table is not present on DB
docker-compose exec app php artisan session:table

docker-compose exec app php artisan migrate

