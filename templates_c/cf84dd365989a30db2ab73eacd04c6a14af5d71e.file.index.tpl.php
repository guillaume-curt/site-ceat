<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-07 08:54:13
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2551854acf435234053-79442150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf84dd365989a30db2ab73eacd04c6a14af5d71e' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1420550412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551854acf435234053-79442150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54acf435287f50_63203753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54acf435287f50_63203753')) {function content_54acf435287f50_63203753($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'test','name'=>'test'), 0);?>
<!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"><head><?php  $_config = new Smarty_Internal_Config("setup.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?></head><body><div class="col-xs-3" id="menu"><?php echo $_smarty_tpl->getSubTemplate ("_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><div class="col-xs-9" id="first"></div><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body></html><?php }} ?>
