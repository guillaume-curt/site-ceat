<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 16:01:09
         compiled from "./templates/content/accueil/carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63149541754c656b5b86d98-94776708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e9356f91084d58ce2250a375d868d7d780b758' => 
    array (
      0 => './templates/content/accueil/carousel.tpl',
      1 => 1422267852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63149541754c656b5b86d98-94776708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carouselId' => 0,
    'template_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c656b5be1171_57204920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c656b5be1171_57204920')) {function content_54c656b5be1171_57204920($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['carouselId'] = new Smarty_variable("header", null, 0);?><div id="<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" class="carousel slide carousel-fade" data-ride="carousel" style="background: #fff url('<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/bg-slider.png') center center no-repeat"><div class="carousel-inner"><div class="item active"><div class="container"><div class="row"><div class="col-md-6"><div class="slider-caption"><h2 class="animated fadeInLeftBig">AFTER SALES SERVICE</h2><div class="animated fadeInDownBig"><p>Phasellus quis <strong>lectus</strong> metus, at posuere neque. Sed pharetra nibh eget orci convallis <strong>at posuere</strong> leo convallis</p></div></div></div><div class="col-md-6"><img class="animated fadeInUpBig" src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/slide1.png"></div></div></div></div><div class="item"><div class="container"><div class="row"><div class="col-md-6"><img class="animated fadeInUpBig" src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/slide2.png"></div><div class="col-md-6"><div class="slider-caption"><h2 class="animated fadeInLeftBig">AFTER SALES SERVICE</h2><div class="animated fadeInDownBig"><p>Phasellus quis <strong>lectus</strong> metus, at posuere neque. Sed pharetra nibh eget orci convallis <strong>at posuere</strong> leo convallis</p></div></div></div></div></div></div><div class="item"><div class="container"><div class="row"><div class="col-md-6"><div class="slider-caption"><h2 class="animated fadeInLeftBig">AFTER SALES SERVICE</h2><div class="animated rollIn"><p>Phasellus quis <strong>lectus</strong> metus, at posuere neque. Sed pharetra nibh eget orci convallis <strong>at posuere</strong> leo convallis</p></div></div></div><div class="col-md-6"><img class="animated fadeInUpBig" src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/slide3.png"></div></div></div></div></div><a class="left carousel-control" href="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="right carousel-control" href="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a><ol class="carousel-indicators"><li data-target="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" data-slide-to="0" class="active"></li><li data-target="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" data-slide-to="1"></li><li data-target="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" data-slide-to="2"></li></ol></div>

<?php }} ?>
