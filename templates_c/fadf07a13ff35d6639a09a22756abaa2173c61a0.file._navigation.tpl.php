<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 14:40:15
         compiled from "./templates/_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68361006454c0fdbf2d88e1-48069565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fadf07a13ff35d6639a09a22756abaa2173c61a0' => 
    array (
      0 => './templates/_navigation.tpl',
      1 => 1421836966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68361006454c0fdbf2d88e1-48069565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
    'items' => 0,
    'site_url' => 0,
    'item' => 0,
    'find' => 0,
    'repl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c0fdbf348879_49740597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0fdbf348879_49740597')) {function content_54c0fdbf348879_49740597($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/jimmylefevre/Desktop/Cadeau/Smarty/libs/plugins/modifier.replace.php';
?><?php $_smarty_tpl->tpl_vars["find"] = new Smarty_variable(array('á','à','â','ä','ã','å','ç','é','è','ê','ë','í','ì','î','ï','ñ','ó','ò','ô','ö','õ','ú','ù','û','ü','ý','ÿ'), null, 0);
$_smarty_tpl->tpl_vars["repl"] = new Smarty_variable(array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y'), null, 0);
$_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array("Accueil","Informations","Activités","Engagements","Ressources Humaines","Contact"), null, 0);?><nav class="navbar navbar-default navbar-static-top"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div id="logo"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/logo-ceat.png"></a></div></div><div id="navbar" class="navbar-collapse collapse menu"><ul class="nav navbar-nav"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo preg_replace('!\s+!u', '-',mb_strtolower(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['find']->value,$_smarty_tpl->tpl_vars['repl']->value), 'UTF-8'));?>
" title="$item"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php } ?></ul></div></div></nav><?php }} ?>
