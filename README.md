# Procurement System

A Laravel-based procurement management system.

## Features

- User authentication and authorization
- Procurement request management
- Role and permission management (powered by [spatie/laravel-permission](vendor/spatie/laravel-permission/README.md))
- Activity logging (powered by [spatie/laravel-activitylog](vendor/spatie/laravel-activitylog/CHANGELOG.md))
- PDF generation (powered by [barryvdh/laravel-dompdf](vendor/barryvdh/laravel-dompdf/CHANGELOG.md))
- And more...

## Requirements

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL or compatible database

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/procurement-v12.git
    cd procurement-v12
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install Node dependencies:
    ```sh
    npm install
    ```

4. Copy the example environment file and set your configuration:
    ```sh
    cp .env.example .env
    ```

5. Generate an application key:
    ```sh
    php artisan key:generate
    ```

6. Run migrations:
    ```sh
    php artisan migrate
    ```

7. Build frontend assets:
    ```sh
    npm run dev
    ```

8. Start the development server:
    ```sh
    php artisan serve
    ```

## Running Tests

```sh
php artisan test
```

## Contributing

Thank you for considering contributing! Please see the [Laravel contribution guide](https://laravel.com/docs/contributions).

## License

This project is open-sourced software licensed under