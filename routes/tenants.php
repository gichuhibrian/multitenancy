<?php

$namespace= 'App\\Http\\Controllers\\Tenant\\';

use \Illuminate\Support\Facades\Route;

Route::prefix('api')->namespace($namespace)->group(function () {
    Route::apiResource('/users', 'UserController');
});
