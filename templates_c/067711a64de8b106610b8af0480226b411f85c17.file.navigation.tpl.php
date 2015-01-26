<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 16:01:09
         compiled from "./templates/common/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167136093854c656b599a241-09227951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '067711a64de8b106610b8af0480226b411f85c17' => 
    array (
      0 => './templates/common/navigation.tpl',
      1 => 1422262568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167136093854c656b599a241-09227951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
    'items' => 0,
    'item' => 0,
    'find' => 0,
    'repl' => 0,
    'identifier' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c656b5b770e2_48369146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c656b5b770e2_48369146')) {function content_54c656b5b770e2_48369146($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/jimmylefevre/Dropbox/ceat-electronique.fr/libs/plugins/modifier.replace.php';
?><?php $_smarty_tpl->tpl_vars["find"] = new Smarty_variable(array('á','à','â','ä','ã','å','ç','é','è','ê','ë','í','ì','î','ï','ñ','ó','ò','ô','ö','õ','ú','ù','û','ü','ý','ÿ'), null, 0);
$_smarty_tpl->tpl_vars["repl"] = new Smarty_variable(array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y'), null, 0);
$_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array("Accueil","Informations","Activités","Engagements","Ressources Humaines","Contact"), null, 0);?><nav class="navbar navbar-default navbar-fixed-top navbar-transparent" role="navigation"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand menus" href="#header"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/logo-ceat.png" height="100"></a></div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
$_smarty_tpl->tpl_vars['identifier'] = new Smarty_variable(preg_replace('!\s+!u', '-',mb_strtolower(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['find']->value,$_smarty_tpl->tpl_vars['repl']->value), 'UTF-8')), null, 0);?><li><a href="#<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>style="display:none"<?php }?>title="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php } ?></ul></div></div></nav>

<?php }} ?>
