<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-05 15:54:37
         compiled from ".\templates\portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1211254aaa5ad123676-73383155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c0a9ae96c42a673f250428431669922f222bc1' => 
    array (
      0 => '.\\templates\\portfolio.tpl',
      1 => 1420469368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1211254aaa5ad123676-73383155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54aaa5ad23dac6_99422550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aaa5ad23dac6_99422550')) {function content_54aaa5ad23dac6_99422550($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'test','name'=>'test'), 0);?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
  <head>
<?php  $_config = new Smarty_Internal_Config("setup.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
  </head>
    <body>
        <h1>Hello, world!</h1>

     



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </body>
</html><?php }} ?>
