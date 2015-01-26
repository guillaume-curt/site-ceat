<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-07 08:54:13
         compiled from ".\templates\_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:943654acf435339f90-55320699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6defe47da75f5aa275459e2dce563c0bfaac48eb' => 
    array (
      0 => '.\\templates\\_navigation.tpl',
      1 => 1420550419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943654acf435339f90-55320699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'template_url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54acf43537b2d6_31763565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54acf43537b2d6_31763565')) {function content_54acf43537b2d6_31763565($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array("Intro","Portfolio","A propos de moi","Mon CV","Contact"), null, 0);?><ul><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li class="col-xs-6 col-xs-offset-6"><a href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/<?php echo preg_replace('!\s+!u', '-',mb_strtolower($_smarty_tpl->tpl_vars['item']->value, 'UTF-8'));?>
.tpl" title="$item"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php } ?></ul><?php }} ?>
