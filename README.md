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

## Web Interface

The web interface allows for managing incidents, corrective actions, inspections, and employees via CRUD operations. It is built using Laravel Blade templates and styled with Tailwind CSS.

### Web Routes

#### Incidents
- `/incidents`: Manage incidents.
- `/incidents/create`: Create a new incident.
- `/incidents/{id}/edit`: Edit an incident.

#### Corrective Actions
- `/corrective-actions`: Manage corrective actions.
- `/corrective-actions/create`: Create a new corrective action.
- `/corrective-actions/{id}/edit`: Edit a corrective action.

#### Inspections
- `/inspections`: Manage inspections.
- `/inspections/create`: Create a new inspection.
- `/inspections/{id}/edit`: Edit an inspection.

#### Employees
- `/employees`: Manage employees.
- `/employees/create`: Create a new employee.
- `/employees/{id}/edit`: Edit an employee.

### Notes
- **CRUD Operations**: All basic CRUD (Create, Read, Update, Delete) operations are supported for incidents, corrective actions, inspections, and employees.
- **Blade Templates**: The interface is built using Blade templates.
- **Tailwind CSS**: Styling is handled by Tailwind CSS.
- **Forms and Views**: Simple and user-friendly forms and views for data management.

Use the specified routes to navigate and manage data through the web interface.
