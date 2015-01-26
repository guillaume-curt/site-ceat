<?php /* Smarty version Smarty-3.1.16, created on 2015-01-05 14:21:23
         compiled from ".\templates\_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:602054aa8fd3c04343-95441029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '768714d22f753813d917da6052c9b8fd4ed73a0b' => 
    array (
      0 => '.\\templates\\_footer.tpl',
      1 => 1418228100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '602054aa8fd3c04343-95441029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54aa8fd3c84ce8_58961226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aa8fd3c84ce8_58961226')) {function content_54aa8fd3c84ce8_58961226($_smarty_tpl) {?><!-- JS and analytics only. --><!-- Footer================================================== --><footer class="bs-footer" role="contentinfo"><div class="container"><ul class="footer-links"><li><a href="./index.html"><?php echo $_smarty_tpl->getConfigVariable('site_name');?>
</a></li><li class="muted">·</li><li><a href="http://ceat-electronique.fr">CEAT Electronique &bull; Web &amp; Mobile</a></li></ul></div></footer><!-- JS and analytics only. --><!-- Bootstrap core JavaScript================================================== --><!-- Placed at the end of the document so the pages load faster --><script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/libs/jquery-1.8.1.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/libs/bootstrap.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/libs/handlebars.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/plugins/snippet/jquery.snippet.min.js"></script><script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/docs.js"></script>
  <script id="bs-sidenav-tmpl" type="text/x-handlebars-template">    
  {{#sections}}
    <li>
      <a href="{{id}}">
      {{title}}

      {{#if subsCount}}
      <small class="bs-sidenav-sub-count">({{subsCount}})</small>
      {{/if}}
      </a>

      <ul class="nav">
        {{#subs}}
        <li>
          <a href="{{id}}">--&nbsp;&nbsp;{{title}}</a>
        </li>
        {{/subs}}
      </ul>
    </li>
  {{/sections}}  
  </script>
<?php }} ?>
