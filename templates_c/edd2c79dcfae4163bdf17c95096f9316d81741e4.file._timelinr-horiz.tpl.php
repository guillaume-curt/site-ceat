<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 09:28:40
         compiled from "./templates/_timelinr-horiz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46780758454c5fab8d013a2-95915053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edd2c79dcfae4163bdf17c95096f9316d81741e4' => 
    array (
      0 => './templates/_timelinr-horiz.tpl',
      1 => 1421760796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46780758454c5fab8d013a2-95915053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c5fab8d17295_62346860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c5fab8d17295_62346860')) {function content_54c5fab8d17295_62346860($_smarty_tpl) {?><div class="col-md-12" id="time">
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
