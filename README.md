# customer-request-validation
The OrigginBank Card Request Service API is a secure and efficient way for FinTech systems to create and check the status of customer card requests in the OrigginBank core banking system

# Technologies Used
* PHP Laravel Framework
* MySQL Database

# Requirements
* PHP >= 7.4
* Composer

# Installation
* Clone the repository: git clone https://github.com/yahuza96/origginbank-card-request-api.git

* Install dependencies: composer install

* Create a .env file: cp .env.example .env

* Generate an application key: php artisan key:generate

* Set up the database in the .env file with the following variables:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=origginbank
DB_USERNAME=root
DB_PASSWORD=
```
* Run database migrations: php artisan migrate

# Running the API
* Start the local development server: php artisan serve
* The API can now be accessed at http://localhost:8000
