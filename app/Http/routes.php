<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//此路由文件已废弃，切割到app/Http/Routes文件夹,代码实现见 app/Providers/RouteServiceProvider.php

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
