<?php /* Smarty version Smarty-3.1.16, created on 2014-03-12 16:32:25
         compiled from "/cinabre/yiis/apps/ionic/protected/views/site/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466959298532019817f13b3-70893487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241b2aebafb725fcacb87494d04b072ffb023897' => 
    array (
      0 => '/cinabre/yiis/apps/ionic/protected/views/site/test.tpl',
      1 => 1394613144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466959298532019817f13b3-70893487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5320198182bcb6_40957196',
  'variables' => 
  array (
    'test' => 0,
    'testArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5320198182bcb6_40957196')) {function content_5320198182bcb6_40957196($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["testArr"] = new Smarty_variable(explode("\t",$_smarty_tpl->tpl_vars['test']->value), null, 0);?>
<div class="actor"><?php echo implode(array_slice($_smarty_tpl->tpl_vars['testArr']->value,0,2),"/");?>
</div>
<?php }} ?>
