### Tutorial to Run Laravel based project by Ashok Poudel ###

Prerequisite softwares:
-Mysql
-Php

step 1: install XAMPP for windows --> https://www.apachefriends.org/download.html

step 2: add php and mysql in system env variable C:\xampp\php & C:\xampp\mysql\bin

step 3: start mysql server from xampp

step 4: setup mysql username and password --> https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql

open command prompt and enter following cmd

	--> mysql -u root -p 
		(default pass none press enter)

	--> CREATE USER 'ashok'@'localhost' IDENTIFIED BY 'password';
	--> GRANT ALL PRIVILEGES ON *.* TO 'ashok'@'localhost' WITH GRANT OPTION;
	--> FLUSH PRIVILEGES;
	--> exit

create a database in mysql new user;
	--> mysql -u ashok -p
	--> create database testdb;

step 5: configure laravel project .env file --> shipmate/.env
	--> enter mysql newly created username, password & database_name in .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testdb
DB_USERNAME=ashok
DB_PASSWORD=8848

step 6: Project Database Migration in mysql newly created database
	//// make sure to comment line 132 - 142 in shipmate/routes/web.php before migration
	--> php artisan migrate:fresh

	//// uncomment the line after migration

step 7: create storage link
	--> php artisan storage:link

step 8: Run the laravel project
	--> php artisan serve

signup and login to the project dashboard !!!

### profile edit option,appearance->menu and add product backend is only completed.
