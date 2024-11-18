<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Table of Contents
- [Table of Contents](#table-of-contents)
- [About Laravel](#about-laravel)
- [Instructions for Creating CRUD App](#instructions-for-creating-crud-app)
  - [1. Install Composer](#1-install-composer)
  - [2. Create Laravel Project](#2-create-laravel-project)
  - [3. Serve Project](#3-serve-project)
  - [4. Run Database](#4-run-database)
  - [5. Update .env with Database Credentials](#5-update-env-with-database-credentials)
  - [6. Create Routes](#6-create-routes)
  - [7. Update app.php](#7-update-appphp)
  - [8. Generate Controller](#8-generate-controller)
  - [9. Run Migrations](#9-run-migrations)
  - [10. Create Database Table](#10-create-database-table)
  - [11. Generate Model](#11-generate-model)
  - [12. Update Model](#12-update-model)
  - [13. Define CRUD Operations](#13-define-crud-operations)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Instructions for Creating CRUD App

### 1. Install Composer
Install Composer with Homebrew:
```sh
brew install composer
```

### 2. Create Laravel Project
Create a new Laravel project:
```sh
composer create-project --prefer-dist laravel/laravel laravel-api
```

### 3. Serve Project
Serve the project:
```sh
php artisan serve
```

### 4. Run Database
Create a Docker network and run MySQL and phpMyAdmin containers:
```sh
docker network create localnetwork
docker run -d --name mysql-container --network=localnetwork -e MYSQL_ROOT_PASSWORD=password -p 3306:3306 mysql:latest
docker run -d --name phpmyadmin-container --network=localnetwork -e PMA_HOST=mysql-container -e PMA_PORT=3306 -p 8080:80 phpmyadmin/phpmyadmin:latest
```
Access phpMyAdmin at [http://localhost:8080](http://localhost:8080).

### 5. Update .env with Database Credentials
Update the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_app
DB_USERNAME=root
DB_PASSWORD=password
```

### 6. Create Routes
Define your API routes in `routes/api.php`.

### 7. Update app.php
Ensure your routes are defined in `app/Providers/RouteServiceProvider.php`.

### 8. Generate Controller
Generate a controller:
```sh
php artisan make:controller ThingController
```

### 9. Run Migrations
Run migrations to set up the database:
```sh
php artisan migrate
```

### 10. Create Database Table
Create your database table by logging into phpMyAdmin and creating the necessary tables.

### 11. Generate Model
Generate a model:
```sh
php artisan make:model Thing
```

### 12. Update Model
Update your model to accept all fields except those specified:
```php
protected $guarded = [];
```

### 13. Define CRUD Operations
Define your CRUD operations in your `ThingController`.
