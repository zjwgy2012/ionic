<?php /* Smarty version Smarty-3.1.16, created on 2014-01-15 22:11:27
         compiled from "/cinabre/team/apps/team/protected/views/companies/companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121277756452d678bd1ca4c2-84338721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a9987a63f9cabdcef6d441610bb2ebdbd55279' => 
    array (
      0 => '/cinabre/team/apps/team/protected/views/companies/companies.tpl',
      1 => 1389795083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121277756452d678bd1ca4c2-84338721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d678bd201c69_50337862',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d678bd201c69_50337862')) {function content_52d678bd201c69_50337862($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>companies</title>
    <link rel="stylesheet" href="../../../assets/css/main.css"></head>
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ('../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="header-page">
        <div class="inner-header">
            <div class="container">
                <div class="intro animate fadeIn">
                    <h1>Our Companies.</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <ul class="companies row">
            <li class="col-xs-6 col-md-3">
                <a href="http://www.cladwell.com" target="_blank">
                    <img src="../../../assets/img/companies/cladwell-logo-blue.svg"></a>
            </li>
            <li class="col-xs-6 col-md-3">
                <a href="http://www.liquid-innovation.com" target="_blank">
                    <img src="../../../assets/img/companies/liquid-logo.png"></a>
            </li>
            <li class="col-xs-6 col-md-3">
                <a href="http://www.assistant.io" target="_blank">
                    <img src="../../../assets/img/companies/assistant-logo-blue.svg"></a>
            </li>
            <li class="col-xs-6 col-md-3">
                <a href="http://www.earthineer.com" target="_blank">
                    <img src="../../../assets/img/companies/earthineer-logo.png"></a>
            </li>
            <li class="col-xs-6 col-md-3">
                <a href="http://www.coursebook.io" target="_blank">
                    <img src="../../../assets/img/companies/coursebook-logo-blue.png"></a>
            </li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="sidr-right" class="sidr right" style="">
        <div class="sidr-inner">
            <ul>
                <li class="">
                    <a href="/about">关于</a>
                </li>
                <li class="sidr-class-active">
                    <a href="/companies">公司</a>
                </li>
                <li class="">
                    <a href="/team">团队</a>
                </li>
                <li class="">
                    <a href="/jobs">职位</a>
                </li>
                <li class="">
                    <a href="/contact">联系</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
<?php }} ?>
