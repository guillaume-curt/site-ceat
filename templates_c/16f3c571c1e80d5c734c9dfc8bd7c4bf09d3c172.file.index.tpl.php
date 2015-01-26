<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-21 09:53:02
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:577754bf68ee1e83d2-03601559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f3c571c1e80d5c734c9dfc8bd7c4bf09d3c172' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1421765077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577754bf68ee1e83d2-03601559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bf68ee2847d7_82678853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bf68ee2847d7_82678853')) {function content_54bf68ee2847d7_82678853($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'test','name'=>'test'), 0);?>
<!DOCTYPE html><html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"><head><?php  $_config = new Smarty_Internal_Config("setup.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?></head><body><?php echo $_smarty_tpl->getSubTemplate ("_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_pre-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_timelinr-horiz.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_pre-activite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_partenaires.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body></html><?php }} ?>
