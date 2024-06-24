# Safety Management System

A comprehensive safety management system built with Laravel, utilizing PostgreSQL for the main database, Redis for caching, and deployed using Laravel Sail.

## Prerequisites

- Docker
- Laravel Sail
- Composer

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Vladiksssy/safety-management-system.git
    cd safety-management-system
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the environment file:**

    ```bash
    cp .env.example .env
    ```

4. **Update the environment file with your configuration:**

   Ensure the following configuration in your `.env` file:

    ```env
    DB_CONNECTION=pgsql
    DB_HOST=pgsql
    DB_PORT=5432
    DB_DATABASE=safety_management
    DB_USERNAME=postgres
    DB_PASSWORD=password

    CACHE_DRIVER=redis
    REDIS_HOST=redis
    REDIS_PASSWORD=null
    REDIS_PORT=6379
    ```

5. **Start Sail:**

    ```bash
    ./vendor/bin/sail up -d
    ```

6. **Run migrations and seeders:**

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

## Usage

### Starting the Application

To start the application, use Sail:

```bash
./vendor/bin/sail up -d
   ```

## Services
This project uses several services, each managed by its own service class:

### CorrectiveActionService
Handles the management of corrective actions within the system. Provides methods to create, update, delete, and retrieve corrective actions.
### EmployeeService
Manages employee data and related operations. Provides methods to add, update, remove, and retrieve employee details.
### IncidentService
Responsible for handling incidents and their details. Includes methods for reporting, updating, resolving, and querying incidents. 
### InspectionService
Manages inspection records and related activities. Provides functionality for scheduling, performing, and reviewing inspections.

These services encapsulate the business logic and interact with the repository classes to perform CRUD operations.
