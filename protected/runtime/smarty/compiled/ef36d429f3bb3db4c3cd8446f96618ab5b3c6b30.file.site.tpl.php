<?php /* Smarty version Smarty-3.1.16, created on 2014-05-28 17:09:44
         compiled from "/cinabre/yiis/apps/ionic/protected/views/site/site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136603719653200d65d10be9-51617216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef36d429f3bb3db4c3cd8446f96618ab5b3c6b30' => 
    array (
      0 => '/cinabre/yiis/apps/ionic/protected/views/site/site.tpl',
      1 => 1401268183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136603719653200d65d10be9-51617216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53200d65d764d3_51647715',
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53200d65d764d3_51647715')) {function content_53200d65d764d3_51647715($_smarty_tpl) {?><!doctype html>
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
                <?php if (!$_smarty_tpl->tpl_vars['userInfo']->value) {?>
                <li>
                    <a href="../login">登录</a>
                </li>
                <li>
                    <a href="../register">注册</a>
                </li>
                <?php } else { ?>
                <li>
                    <a>你好:<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['nickname'];?>
</a>
                </li>
                <li>
                    <a>你的角色是:
                    <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['user_role']==1) {?>
                    超级管理员
                    <?php } elseif ($_smarty_tpl->tpl_vars['userInfo']->value['user_role']==2) {?>
                    管理员
                    <?php } else { ?>
                    普通用户
                    <?php }?>
                    </a>
                </li>
                <li>
                    <a href="/logout">退出</a>
                </li>
                <?php }?>
            </ul>
        </nav>
    </div>
</header>
</div>
<div class="container sanguo-container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover" >
            <thead>
                <tr class="danger">
                    <th colspan="2" style="text-align:center">《蒿里行》--曹操</th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td align="center">关东有义士，兴兵讨群凶</td>
                    <td align="center">初期会盟津，乃心在咸阳</td>
                </tr>
                <tr class="success">
                    <td align="center">军合力不齐，踌躇而雁行</td>
                    <td align="center">势利使人争，嗣还自相戕</td>
                </tr>
                <tr class="success">
                    <td align="center">淮南弟称号，刻玺于北方</td>
                    <td align="center">铠甲生虮虱，百姓以死亡</td>
                </tr>
                <tr class="success">
                    <td align="center">白骨露於野，千里无鸡鸣</td>
                    <td align="center">生民百遗一，念之断人肠</td>
                </tr>
            </tbody> 
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="danger">
                    <th>姓名</th>
                    <th>国家</th>
                    <th>字号</th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td>诸葛亮</td>
                    <td>蜀国</td>
                    <td>孔明</td>
                </tr>
                <tr class="success">
                    <td>曹操</td>
                    <td>魏国</td>
                    <td>孟德</td>
                </tr>
                <tr class="success">
                    <td>刘备</td>
                    <td>蜀国</td>
                    <td>玄德</td>
                </tr>
                <tr class="success">
                    <td>孙权</td>
                    <td>吴国</td>
                    <td>仲谋</td>
                </tr>
            </tbody> 
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="danger">
                    <th>姓名</th>
                    <th>国家</th>
                    <th>字号</th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td>诸葛亮</td>
                    <td>蜀国</td>
                    <td>孔明</td>
                </tr>
                <tr class="success">
                    <td>曹操</td>
                    <td>魏国</td>
                    <td>孟德</td>
                </tr>
                <tr class="success">
                    <td>刘备</td>
                    <td>蜀国</td>
                    <td>玄德</td>
                </tr>
                <tr class="success">
                    <td>孙权</td>
                    <td>吴国</td>
                    <td>仲谋</td>
                </tr>
            </tbody> 
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="danger">
                    <th>姓名</th>
                    <th>国家</th>
                    <th>字号</th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td>诸葛亮</td>
                    <td>蜀国</td>
                    <td>孔明</td>
                </tr>
                <tr class="success">
                    <td>曹操</td>
                    <td>魏国</td>
                    <td>孟德</td>
                </tr>
                <tr class="success">
                    <td>刘备</td>
                    <td>蜀国</td>
                    <td>玄德</td>
                </tr>
                <tr class="success">
                    <td>孙权</td>
                    <td>吴国</td>
                    <td>仲谋</td>
                </tr>
            </tbody> 
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="danger">
                    <th>姓名</th>
                    <th>国家</th>
                    <th>字号</th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td>诸葛亮</td>
                    <td>蜀国</td>
                    <td>孔明</td>
                </tr>
                <tr class="success">
                    <td>曹操</td>
                    <td>魏国</td>
                    <td>孟德</td>
                </tr>
                <tr class="success">
                    <td>刘备</td>
                    <td>蜀国</td>
                    <td>玄德</td>
                </tr>
                <tr class="success">
                    <td>孙权</td>
                    <td>吴国</td>
                    <td>仲谋</td>
                </tr>
            </tbody> 
        </table>
    </div>
    <button type="button" class="btn btn-success">张敬伟</button>
    <span class="glyphicon glyphicon-star"></span>周瑜
</div>
<div class="go-top">
    <div class="arrow"></div>
    <div class="stick"></div>
</div>
    <!-- jquery -->
    <script src="assets/jquery/jquery-1.10.2.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- go top js -->
    <script src="assets/js/go-top.js"></script>
</body>
</html>
<?php }} ?>
