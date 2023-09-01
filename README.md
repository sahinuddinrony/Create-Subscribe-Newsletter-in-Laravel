# Laravel Contact Form Send Email using Gmail SMTP

[Link to article described this code](#)

## Introduction

In this guide, learn how to create your own email subscription (newsletter) using Gmail's SMTP service. Engage your audience effectively and effortlessly by sending personalized newsletters straight from your Gmail account.

## Business Features

- Implement any subscription (newsletter) etc 
- Implement Varius Website, such as:
    - List all Subscribe in each contact email
    - List all user Send Email to Admin
    
## Run project

Clone repository:

    https://github.com/sahinuddinrony/Create-Subscribe-Newsletter-in-Laravel.git

Go to folder:

    cd Laravel-Contact-Form-Send-Email

Install dependencies:

    composer install

Copy .env file:

    Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

Generate app key:

    php artisan key:generate

Run migrations:

    php artisan migrate
    
Run Artisan:

    php artisan serve

Go to Browser Address Bar:

    http://localhost:8000/

## Author

[Sahin Uddin Rony](https://www.linkedin.com/in/sahinuddinrony/)


    
