# Laravel 10 Setup Instructions

This guide will walk you through the setup process for a Laravel 10 application running on PHP 8.1. Follow these steps to get started with the project.

## Prerequisites

- PHP 8.1 or higher
- Composer (for managing PHP dependencies)
- A database (MySQL, PostgreSQL, etc.)
- Laravel 10

## 1. Clone the Repository
```bash
git clone https://github.com/SomiaSherif25/tasks-crud.git
```
## 2. Copy the .env file

```bash
cp .env.example .env
```

## Prerequisites
- put variables needed in .env

## 3. Install Dependencies
```bash
composer install
```
## 4. Generate Application Key
```bash
php artisan key:generate
```
## 5. Publish Sanctum Configuration
```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```
## 6. Run Database Migrations
```bash
php artisan migrate
```
## 7. Seed the Database
```bash
php artisan db:seed
```


