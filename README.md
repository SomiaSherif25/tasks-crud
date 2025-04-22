# Laravel 10 Task CRUD API

This is a simple **Task Management API** built using **Laravel 10** and **PHP 8.1**, designed following the **Service Oriented Architecture (SOA)** pattern. The API allows authenticated users to manage their tasks through CRUD operations, with clean separation of concerns via service classes.

---

## 📌 Project Overview

- Follows **Service Oriented Architecture (SOA)** for clean and scalable code structure.
- Implements **Sanctum** for token-based authentication.
- All task-related endpoints are protected and require authentication.
- Uses Laravel Resource classes for structured API responses.

---

## 🔐 Authentication

- `POST /api/login` — Logs in a user and returns an access token.

---

## 📋 Task Endpoints (protected by `auth:sanctum` middleware)

- `GET /api/tasks` — Retrieve all tasks for the authenticated user  
- `GET /api/tasks/{id}` — Retrieve a specific task by ID  
- `POST /api/tasks` — Create a new task  
- `PUT /api/tasks/{id}` — Update an existing task  
- `DELETE /api/tasks/{id}` — Soft delete a task  

---
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
## 8. Run the Test Unit
- A test has been written to validate the login functionality, ensuring that the system correctly handles authentication logic with proper input and token generation.
```bash
php artisan test
```

