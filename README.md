# Custom MVC Framework PHP

Simple custom framework to learn MVC.

#Project Structure
  - app (folder) : containers models, controllers and views folder in which user can create custom models/controllers/views
  - config (folder) : used to set database configuration
  - mhFramework (folder) : custom framework folder , contain different framework classes
  - public (folder) : contain public files such as index.php, css, js files
  - .htaccess (file) : htaccess file to redirect all request to public folder
  - autoload.php (file) : Used to autoload classes
  
  
  
# Basic configuartion

1. Edit the index.php file inside your public folder and set $indexFileUrl pointing to your public folder.

   `
    $indexFileUrl = "public/index.php";
   `
   
2 Edit database.php inside config folder to set your database configuration




# Based On

https://github.com/ngrt/MVC_todo

https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19

