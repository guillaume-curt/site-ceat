<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 13:53:34
         compiled from ".\templates\_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2036454c0f2ce145ed0-87130296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2d668fda178ad6c4d4df9fa7359e67a8ffe735' => 
    array (
      0 => '.\\templates\\_footer.tpl',
      1 => 1421915687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036454c0f2ce145ed0-87130296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
    'items' => 0,
    'site_url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c0f2ce23c057_92590039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0f2ce23c057_92590039')) {function content_54c0f2ce23c057_92590039($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array("Accueil","Informations","Activités","Engagements","Ressources Humaines","Contact"), null, 0);?><div class="col-md-12" id="footer"><div class="col-md-2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/logo-ceat.png" id="logo-footer"><h5>Copyright © 2014 CEAT Electronique.<br>All Rights Reserved</h2></div><div class="col-md-3" id="coordonnees"><div class="col-md-12"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/icon-green-1.png" class="icon-green"><p>Rue du 19 Mars 1962, 21600 Longvic</p></div><div class="col-md-12"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/icon-green-2.png" class="icon-green"><p>contact@ceat-electronique.fr</p></div><div class="col-md-12"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/icon-green-3.png" class="icon-green"><p>03 80 46 01 34</p></div><div class="col-md-12"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/icon-green-4.png" class="icon-green"><p>03 80 46 01 34</p></div></div><div class="col-md-6" id="sous-menu"><ul><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo preg_replace('!\s+!u', '-',mb_strtolower($_smarty_tpl->tpl_vars['item']->value, 'UTF-8'));?>
" title="$item"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php } ?></ul></div><div class="col-md-1"><a href="#" id="bouton">V</a></div></div><?php }} ?>
