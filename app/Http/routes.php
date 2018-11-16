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


//此路由文件已包含，切割到app/Http/Routes文件夹,代码实现见 app/Providers/RouteServiceProvider.php


//路由分组:中间件
Route::group(['middleware'=>'age'],function(){
    Route::get('/myMiddleware',function(){
        //使用Test中间件
    });

});
Route::get('/myMiddleware/refuse',['as'=>'refuse',function(){  //这里的refuse对应AgeMiddleware中间件的逻辑,访问 laravel51.com/test?age=15 ，页面会跳转到laravel51.com/test/refuse，并输出内容:未成年人禁止入内！
    return "未成年人禁止入内！";
}]);