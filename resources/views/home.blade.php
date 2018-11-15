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
                    <p>欢迎来到laravel5.1</p>
                </div>
                <div class="banner-right">
                    <ul>
                        <li><a href="<?php echo url('login')?>">登录</a></li>
                        <li><a href="<?php echo url('login')?>">注册</a></li>
                    </ul>

                </div>

            </div>

        </div>
    </body>
</html>
