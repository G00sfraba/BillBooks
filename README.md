# BillBooks
Simple Book Catalogue using Laravel


# Instalation

The laravel way:
1) Install composer here is how: 

```
https://getcomposer.org/doc/00-intro.md
```

2) Navigate to the projects root and install the project 
```
composer install
```

3)Now setup your MySQL database in the .env file
```
APP_NAME="Bill's Books"
APP_ENV=local
APP_KEY=base64:q5COOJcXTJ4TX5PhLzcU6rH8kRRyTzLd1HN7aWA8S50=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bill_books
DB_USERNAME=root
DB_PASSWORD=
```


4) now migrate the database setup with php artisan
```
php artisan migrate
```

That's it - you can enjoy the project.