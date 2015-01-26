<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 12:18:55
         compiled from ".\templates\activites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1519054c0dc9f29f4b8-16700768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f3435164fac32e89b50fcf45c5d8d5c8ff18032' => 
    array (
      0 => '.\\templates\\activites.tpl',
      1 => 1421832055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519054c0dc9f29f4b8-16700768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c0dc9f310935_32430110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0dc9f310935_32430110')) {function content_54c0dc9f310935_32430110($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'test','name'=>'test'), 0);?>
<!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"><head><?php  $_config = new Smarty_Internal_Config("setup.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?></head><body><?php echo $_smarty_tpl->getSubTemplate ("_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_activites.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body></html><?php }} ?>
