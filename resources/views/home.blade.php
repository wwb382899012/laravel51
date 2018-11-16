<!DOCTYPE html>
<html>
    <head>
        <title>欢迎来到laravel5.1</title>

        {{--<link href="{{URL::asset('css/home.css')}}" rel="stylesheet" type="text/css">--}}
        <link href="<?php echo asset('css/home.css');?>" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="banner">
                <div class="banner-left">
                    <p><a href="<?php echo url();  ?>">欢迎来到laravel5.1</a></p>
                </div>
                <div class="banner-right">
                    <ul>
                        <li><a href="<?php echo url('login')?>">登录后台</a></li>
                        <li><a href="<?php echo url('register')?>">关于我们</a></li>
                    </ul>

                </div>

            </div>
            <!-- 路由 -->
            <div class="content">
                    <div class="part">
                        <p class="p-banner">路由</p>
                        <div class="part-small">
                            <p><span>1、调用命名路由</span>：useNameRoute  <a href="<?php echo url('useNameRoute'); ?>">点击查看</a></p>
                            <p><span>2、路由分组(中间件)</span>：年龄小于18岁禁止访问 myMiddleware?age=15  <a href="<?php echo url('myMiddleware?age=15'); ?>">点击查看</a></p>
                        </div>

                    </div>
            </div>

            <!-- 控制器 -->
            <div class="content">
                <div class="part">
                    <p class="p-banner">控制器</p>
                    <div class="part-small">
                        <p><span>1、基础控制器</span>：login <a href="<?php echo url('login'); ?>">点击查看</a></p>
                        <p><span>2、层级控制器</span>：admin/user <a href="<?php echo url('admin/user'); ?>">点击查看</a></p>
                    </div>

                </div>
            </div>

            <!-- 请求和响应 -->
            <div class="content">
                <div class="part">
                    <p class="p-banner">请求和响应</p>
                    <div class="part-small">
                        <p><span>1、请求和响应 </span>：doLogin?id=100 <a href="<?php echo url('doLogin?id=100'); ?>">点击查看</a></p>
                        <p><span>2、重定向 </span>：<a href="<?php echo url('redirect'); ?>">点击查看</a></p>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
