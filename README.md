# Task Management - Laravel Back-End

## Overview
This is the back-end part of the Task Management application built using **Laravel**. It exposes an API for managing tasks, including features such as fetching a paginated list of tasks, with dummy data seeded into a database.

## Technologies Used
- **Framework**: Laravel 10.x
- **Database**: MySQL (or any other database of your choice)
- **PHP**: 8.x
- **Composer**: Dependency management

## Getting Started

### Prerequisites

- **PHP 8.x** or higher
- **Composer**: Dependency manager for PHP
- **MySQL** or your preferred database for Laravel

Ensure that the following dependencies are installed on your machine:

- Composer: [https://getcomposer.org/download/](https://getcomposer.org/download/)
- PHP: [https://www.php.net/downloads.php](https://www.php.net/downloads.php)
- MySQL or another database (for example, you can use SQLite if you prefer)

### Installation

1. **Clone the Repository**:
   First, clone the repository to your local machine:

   ```bash
   git clone https://github.com/Tariq3laa/task-management-backend.git

2. **Navigate into project Folder**:
    Navigate into your project folder:

   ```bash
    cd task-management-backend

3. **Install Dependencies**:
    Install the required PHP dependencies using Composer:

   ```bash
    composer install

4. **Set up Environment File**:
    Copy the .env.example file to .env:

   ```bash
    cp .env.example .env

5. **Configure the Database**:
    Open the .env file and configure the database connection settings as per your environment:

    Make sure your MySQL database is set up (you can create a new one for this app, for example, task_management).

   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=task_management
    DB_USERNAME=root
    DB_PASSWORD=

6. **Generate Application Key**:
    Laravel requires an application key for encryption purposes. You can generate it by running:

   ```bash
    php artisan key:generate

7. **Migrate the Database**:
    Run the database migrations to create the required tables:

   ```bash
    php artisan migrate

8. **Seed the Database**:
    Use Laravel's built-in factory and seeding functionality to populate the database with dummy task data:

   ```bash
    php artisan db:seed --class=TaskSeeder

9. **Start the Laravel Development Server**:
    Finally, run the Laravel development server:

   ```bash
    php artisan serve
