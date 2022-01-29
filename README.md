Simple Medium App
to post article, list all articles and show an article

First of all, download the project and extract it. Then follow these steps:

1- Import the database 'mediumdb.sql' 
The settings for database: (or you can change them in the env file in the project)
DB_DATABASE=mediumdb
DB_USERNAME=root
DB_PASSWORD=

2- Open the project folder and run these commands in terminal:
> composer install
> npm install

3- Run the app using:
> php artisan serve

4- Login UI is the first page, using this account to login:
admin@medium.com
password: mona

5- The second UI is the dashboard which contains list of articles and 'Write an article' button.
You can click on read more to view details about each article.

6- When you click on write an article, you should add the title of the article, body, tags (separate them by comma ',') 
and you can upload cover photo and other images to the article.
----------------------------------------------------
I used these concepts in building the app:
Faker library to create dummy data.
CRUD and Resource Controllers.
Form Validation and Requests.
Bootstrap as a CSS framework.
And for tags articles I used laravel-tagging package.

