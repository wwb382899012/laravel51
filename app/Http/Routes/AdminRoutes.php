<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2018/11/16
 * Time: 9:48
 */
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AdminRoutes
{
    public function map(Registrar $router)
    {
        //控制器路由
        $router->get('/admin/user', ['as' => 'admin.user', 'uses' => 'Admin\UserController@index']); //as 命名路由
    }
}