<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 13:53:33
         compiled from ".\templates\informations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1571254c0f2cdab7e55-26792558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbfed5cd704b02ae2734cdca7ab4884a8fa25e7d' => 
    array (
      0 => '.\\templates\\informations.tpl',
      1 => 1421928876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1571254c0f2cdab7e55-26792558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c0f2cdbc9551_45228315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0f2cdbc9551_45228315')) {function content_54c0f2cdbc9551_45228315($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'test','name'=>'test'), 0);?>
<!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"><head><?php  $_config = new Smarty_Internal_Config("setup.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?></head><body><?php echo $_smarty_tpl->getSubTemplate ("_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_timelinr-verti.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body></html><?php }} ?>
