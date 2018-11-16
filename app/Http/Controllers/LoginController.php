<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2018/11/16
 * Time: 10:02
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * index  登录页面
     * @param
     * @throw
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('login.index', array());
    }

    public function doLogin(Request $request){
        return response()->json(['id' => $request->input('id')]);

    }

    public function redirect(){
        return redirect()->action('LoginController@index');
    }
}