<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-22 14:40:15
         compiled from "./templates/_timelinr-horiz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12937733854c0fdbf36b503-64745394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c1f4020f6929cac900646c4575b9a598afe978' => 
    array (
      0 => './templates/_timelinr-horiz.tpl',
      1 => 1421760796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12937733854c0fdbf36b503-64745394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c0fdbf37d035_97054051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0fdbf37d035_97054051')) {function content_54c0fdbf37d035_97054051($_smarty_tpl) {?><div class="col-md-12" id="time">
    <div id="timeline">
		<ul id="dates">
			<li><a href="#1977">1977</a></li>
			<li><a href="#1985">1985</a></li>
			<li><a href="#1998">1998</a></li>
			<li><a href="#2004">2004</a></li>
		</ul>
		<ul id="issues">
			<li id="1977">
				<img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/1.png" width="256" height="256" />
				<h1>1977</h1>
				<p>Création de l’entreprise par Gilbert Vigneron (actuel dirigeant).</p>
			</li>
			<li id="1985">
				<img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/2.png" width="256" height="256" />
				<h1>1985</h1>
				<p>Début du partenariat avec SAMSUNG France.</p>
			</li>
			<li id="1998">
				<img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/3.png" width="256" height="256" />
				<h1>1998</h1>
				<p>C.E.A.T. Electronique devient le centre national de réparation de téléphones mobiles pour SAMSUNG France.</p>
			</li>
			<li id="2004">
				<img src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/4.png" width="256" height="256" />
				<h1>2004</h1>
				<p>Premières reparations de Notebooks SAMSUNG.</p>
			</li>
        </ul>
		<a href="#" id="next">+</a>
		<a href="#" id="prev">-</a>
    </div>
</div><?php }} ?>
