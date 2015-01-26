<?php /* Smarty version Smarty-3.1.16, created on 2014-12-11 09:14:34
         compiled from "./templates/webservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12725038925489526a705aa0-48490781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1482cdd651d53473ac4ef7909729298bd1b99f97' => 
    array (
      0 => './templates/webservices.tpl',
      1 => 1418285672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12725038925489526a705aa0-48490781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5489526a7759b5_03531443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489526a7759b5_03531443')) {function content_5489526a7759b5_03531443($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("setup.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?><!DOCTYPE html><html lang="fr"><head><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</head><body class="bs-docs-home"><?php echo $_smarty_tpl->getSubTemplate ("_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<div class="bs-header" id="content" style="text-align:center; padding:100px 0 100px 0"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/ic_launcher.png" alt="<?php echo $_smarty_tpl->getConfigVariable('site_name');?>
"/></div><div class="container bs-docs-container"><div class="row"><div id="sidebar" class="col-md-3"><div class="bs-sidebar hidden-print affix-top" role="complementary"><ul class="nav bs-sidenav"></ul></div></div><div id="main" class="col-md-9" role="main"><?php echo $_smarty_tpl->getSubTemplate ("chapitres/2-qctelcare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div></div><?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</body></html><?php }} ?>
