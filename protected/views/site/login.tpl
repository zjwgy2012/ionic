<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="《三国志》为西晋陈寿所著，是二十四史中评价最高的前四史之一">
    <meta name="keywords" content="三国志、曹操、诸葛亮、刘备、孙权、袁绍、赤壁之战、官渡之战">
    <meta name="author" content="Tim Zhang">
    <title>
        三国志.管理系统
    </title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- my own css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- go top css -->
    <link rel="stylesheet" href="assets/css/go-top.css">
    <!-- icon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top sanguo-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">三国志</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../">魏国</a>
                </li>
                <li>
                    <a href="../">蜀国</a>
                </li>
                <li>
                    <a href="../">吴国</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../about">关于</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
</div>
<div class="container sanguo-container">
    <form class="form-horizontal" role="form" action="/login" id="loginForm" method="post">
        <div class="form-group">
            <div class="alert alert-success col-sm-3">
            测试账号:306824269@qq.com
            <br>
            测试密码:superadmin
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3 input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input class="form-control" id="username" type="text" name="username" placeholder="邮箱" />
            </div>
            <label for="username" class="error label label-success"></label>
        </div>
        <div class="form-group">
            <div class="col-sm-3 input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-hand-right"></span></span>
                <input class="form-control" id="password" type="password" name="password" placeholder="密码" />
            </div>
            <label for="password" class="error label label-success"></label>
        </div>
        {#if $showVerifyCode#}
        <div class="form-group">
            <div class="col-sm-3 input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
                <input class="form-control" id="verifyCode" type="text" name="verifyCode" placeholder="验证码" />
            </div>
        </div>
        {#/if#}
        <div class="form-group">
            <div class="col-sm-4">
                <span class="checkbox">
                    <label>
                        <input type="checkbox" id="rememberMe" name="rememberMe" value="rememberMe">下次自动登录
                    </label>
                <a href='/register' class="right" >注册</a>|
                <a href='/forgot' >忘记密码</a>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success" id="loginBtn">
                登录
                </button>
            </div>
        </div>
    </form>
    {#if $errMsg != '' #}
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {#$errMsg#}
    </div>
    {#/if#}
</div>
<div class="go-top">
    <div class="arrow"></div>
    <div class="stick"></div>
</div>
    <!-- jquery -->
    <script src="assets/jquery/jquery-1.10.2.min.js"></script>
    <!-- jquery validate cdn -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- go top js -->
    <script src="assets/js/go-top.js"></script>
    <script>
        $(document).ready(function () {
                $("#loginForm").validate({
                        rules:{
                                username:{required:true,email:true},
                                password:{required:true,minlength:6}
                            },
                        messages:{
                                 username:{required:"邮箱不能为空",email:jQuery.format("邮箱格式不正确")},
                                 password:{required:"密码不能为空",minlength:jQuery.format("密码长度不能少于{0}位")}
                            }
                    })
            })
    </script>
</body>
</html>
