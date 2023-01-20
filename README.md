<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<div>
  <p>
    First of all, download code on this repository github
Then extract the .zip folder has been downloaded

After that follow below steps from top to bottom:
1. Open XAMPP  
2. Start the module "Apache" and "MySQL"  
3. Press actions "Admin" on module "MySQL"  
4. Create empty database on xampp with name "redundanthops"  
5. Open the code with vscode  
6. Open terminal in vscode (Shortcut: ctrl + `)  
7. In terminal, type "composer install", then press enter and wait  
8. If error on step 7, then type "composer update" then press enter and wait, after that type again "composer install" then press enter and wait  
9. In Terminal, type "php artisan migrate:refresh --seed", then press enter and wait  
10. In terminal, type "php artisan serve" then open the given local host link in terminal  
11. After clicked the given local host link it will direct user to landing page   
12. If the image doesn't appear on landing page, then we must remove the storage from below steps:  
12.1. In terminal, type "cd public", then press enter and wait  
12.2. In terminal, type "rm storage", then press enter and wait  
12.3. In terminal, type "cd ..", then press enter and wait  
12.4. In terminal, type "php artisan storage:link", then press enter and wait  
13. Enjoy :D  
  </p>
</div>

