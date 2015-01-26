<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 16:01:09
         compiled from "./templates/content/accueil/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211947378254c656b5c7ed00-86766356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789673615b4650b7e536b96c39553dc12919ed35' => 
    array (
      0 => './templates/content/accueil/contact.tpl',
      1 => 1422279942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211947378254c656b5c7ed00-86766356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c656b5c8cb72_55775670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c656b5c8cb72_55775670')) {function content_54c656b5c8cb72_55775670($_smarty_tpl) {?><!-- begin:contact --><div id="contact"><div class="container"><div class="row"><div class="col-md-12"><div class="page-title"><h2>Contact</h2></div></div></div><!-- break --><div class="row"><div class="col-md-6 col-sm-6"><form role="form" class="contact-form"><div class="form-group"><label for="name" class="sr-only">Nom</label><input type="text" class="form-control input-lg" id="author" placeholder="Nom: " required><span class="form-focus-icon focus-icon-name"></span></div><div class="form-group"><label for="email" class="sr-only">Email</label><input type="email" class="form-control input-lg" id="email" placeholder="Email: " required><span class="form-focus-icon focus-icon-mail"></span></div><div class="form-group"><label for="phone" class="sr-only">T&eacute;l&eacute;phone</label><input type="text" class="form-control input-lg" id="phone" placeholder="T&eacute;l&eacute;phone: " required><span class="form-focus-icon focus-icon-phone"></span></div><div class="form-group"><label for="message" class="sr-only">Message</label><textarea class="form-control input-lg" id="message" placeholder="Message: " rows="5" required></textarea><span class="form-focus-icon focus-icon-message"></span></div><button type="submit" class="btn btn-lucky btn-lg pull-right"><i class="fa fa-envelope-o"></i> Envoyer</button></form></div><div class="col-md-6" id="batiment"><img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/batiment.png" class="img-responsive"></div></div></div></div><!-- end:contact -->
<?php }} ?>
