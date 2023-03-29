# Application that generate a QRCode to access profile

## The idea
The project was made with Laravel and Livewire. Because of the optional parameter on the url that shows the
profile, to avoid conflicts and errors, the name was set as a unique property, so he is treated more as a username.
<br>
The idea is the user be able to access his profile by scanning a QRCode dinamically made with the user name.


## Routes

### Web Route
| HTTP Method | Endpoint         | Description                                                      |
|-------------|------------------|------------------------------------------------------------------|
| GET         | `/`              | Get the page to fill with information's and generate the QRCode. |
| GET         | `/{name}`        | Return the user profile                                          |

### API Route
| HTTP Method | Endpoint | Description                          |
|-------------|----------|--------------------------------------|
| GET         | `/api/`  | Return all the registered users info |


## Setup the project
```
# clone the project
$ git clone git@github.com:thalesmengue/test-buzzvel.git

# enter the project folder

# install dependencies
$ composer install && npm install

# make a copy of .env.example
$ cp .env.example .env

# set your database credentials in .env

# generate a new application key
$ php artisan key:generate

# run the migrations
$ php artisan migrate

# run the application
$ php artisan serve
$ npm run dev
```

## Tests
To run the tests made, run the command below: 
```
$ php artisan test
```

## Technologies

- [PHP 8.1](https://www.php.net/)
- [Laravel 10](https://laravel.com/)
- [Livewire](https://laravel-livewire.com/)
- [TailwindCSS](https://tailwindcss.com/)
- [Simple QrCode](https://www.simplesoftware.io/#/docs/simple-qrcode)

