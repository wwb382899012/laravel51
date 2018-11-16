<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2018/11/16
 * Time: 9:49
 */


namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;
use Symfony\Component\Routing\Route;

class FrontRoutes
{
    //不在这里写逻辑代码，逻辑处理代码请在 Controller 里书写

    public function map(Registrar $router)
    {
        //视图路由
        $router->get('/',function (){
            return view('home');
        });

        //控制器路由
        $router->get('/login', ['as' => 'loginPage', 'uses' => 'LoginController@index']); //as 命名路由

        //基本路由  get/post/put/delete/any
        /*$router->any('/register',function (){
            echo '联系我们：0755-51548515';
        });*/
        $router->match(['get','post'],'/register',function (){
            echo '联系我们：0755-51548515';
        });

        //调用命名路由
        $router->get('/useNameRoute',function(){
            return Route('loginPage');
        });





    }
}