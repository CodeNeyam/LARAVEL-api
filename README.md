# LARAVEL-api

This is a RESTful API built with Laravel, providing endpoints for creating, updating, deleting and retrieving data.

## Features

- Create, read, update and delete records via API endpoints
- Token-based authentication
- Pagination of results
- Custom error handling

## Technologies Used

- Laravel framework
- MySQL database
- PHP
- Postman 

## Installation

1. Clone this repository.
2. Navigate to the repository directory in the terminal.
3. Run composer install to install dependencies.
4. Create a new MySQL database and update the DB_* entries in the .env file to match your database credentials.
5. Run php artisan migrate to create the necessary tables.
6. Run php artisan serve to start the local server.

## API Endpoints

- GET /api/resource - Retrieves a list of resources
- POST /api/resource - Creates a new resource
- GET /api/resource/{id} - Retrieves a specific resource by ID
- PUT /api/resource/{id} - Updates a specific resource by ID
- DELETE /api/resource/{id} - Deletes a specific resource by ID


## Contributing

Contributions to this API are welcome! Please follow these steps to contribute:

1. Fork this repository.
2. Create a branch: `git checkout -b my-new-feature`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin my-new-feature`.
5. Submit a pull request.
