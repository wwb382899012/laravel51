<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2018/11/16
 * Time: 10:02
 */

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * index  登录页面
     * @param
     * @throw
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.user.index', array());
    }
}