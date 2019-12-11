## Laravel 101

A sandbox project for testing and learning laravel basic rest API, here is the list features included

- Authentication using passport
- Custom commands of artisan for setup installation
- Database Migration
- Database Seeder
- Access Control List for each modules
- Middleware for authentication permission

## Installation
Clone the repository
    git clone https://github.com/JaoAustero/laravel101.git

Switch to the repo folder
    cd laravel101.gmi-solution.loc

Get all dependencies
    composer install

Copy the example .env file and make the required configuration changes in .env file
    cp .env.example .env

Generate a new application key
    php artisan key:generate

DB migration, setup passport
    php artisan setup:install

Start the local development server
    php artisan serve

## Postman Collection
[Click here](https://www.getpostman.com/collections/0b83b2faf1549cf9c98c)