Author: Ryan Buhayan Llamido                                                                                     
Date  : 20 December 2020                                                                                          
Place : University of San Carlos, SAS-DCIS, Talamban Campus, Cebu City, Philippines                              

**Hotel Reservations**

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=new_project
- DB_USERNAME=root
- DB_PASSWORD=

To put all tables
- php artisan migrate
*In table images, change the data type of user_image in Structure blob to LONGBLOB because some of picture's size is big

*To make a ready made admin and user:
- php artisan db:seed --class=CreateUsersSeeder

- Admin User: 
- Email: admin@gmail.com
- Password: 123456

- Normal User
- Email: user@gmail.com
- Password: 123456

Or make an user account through register account
if you want to have a admin access you can configure at database 
- users table then column is_admin to 1 to become admin

To run the server
- php artisan serve

Admin power
- to display all Hotels added by Users, update and delete

User power
- to add hotel, display his/her hotel added and delete

