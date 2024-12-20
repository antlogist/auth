1. Install Laravel Breeze using Composer. 
```
composer require laravel/breeze --dev
```
2. Update composer berfore install breeze via artisan
```
composer self-update
```
3. Run the breeze:install Artisan command.
```
php artisan breeze:install
```
4. Generate a listener to track the new user registration event
```
php artisan make:listener SendRegisterNotification
```
5. Generate a class to send a notification about the registration of a new user
```
php artisan make:mail UserRegistered
```
