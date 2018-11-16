<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2018/11/16
 * Time: 9:49
 */


namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class FrontRoutes
{
    public function map(Registrar $router)
    {
        //视图路由
        $router->get('/',function (){
            return view('home');
        });

        //控制器路由
        $router->get('/login', ['as' => 'index.login', 'uses' => 'LoginController@index']);
    }
}