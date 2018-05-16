
## About Administration Module

In this tutorial, we will be building an Administration Module with an ACL(Access Control List) based on Roles and Permissions.

This module will be modelled after a recruitment agency software, to keep it simple, we will have 3 different types of users (roles), using the Entrust package, we will control the sections each type of user has access to.



## Steps of this project 
1. First create a laravel project
-- composer create-project laravel/laravel administration-module
2. Install Entrust package
-- Added "zizaco/entrust": "dev-master" in composer.json file in require file
-- Then composer update
3.  Add Entrust Provider and Facades
-- In project config/app.php file open
-- Added providers array this : Zizaco\Entrust\EntrustServiceProvider::class,
-- Added aliases array this : 'Entrust'   => Zizaco\Entrust\EntrustFacade::class,,
4. Then Need to publish this package by command line
-- php artisan vendor:publish
-- Then new file is added on config directory named entrust.php
5. Entrust packages provided some middleware which need to define on app/Http/Kernel.php file
6. Added 4 tables are in entrust packages
-- Run php artisan entrust:migration to added 4 tables on this project

7. Added 2 models for roles, permission,



## Followed
All are copied from 'https://medium.com/@mosesesan/tutorial-6-how-to-build-a-laravel-5-4-4ba44f26b853'

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
