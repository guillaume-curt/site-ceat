<?php
 /**
 * Controller 
 * @package Controller 
 */
session_start();
//Header("Cache-Control: must-revalidate");
error_reporting(-1);
ini_set('display_errors', '1');
setlocale (LC_ALL, 'fr_FR');


require('./libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 3600;

$defaultPageName = 'accueil';
$root = str_replace('index.php', '', $_SERVER['PHP_SELF']);

$params = isset($_GET['route']) ? explode('/', $_GET['route']) : array('');

$smarty->addPluginsDir('./plugins');
$smarty->assign('lang', 'fr');
$smarty->assign('params', $params);
$smarty->assign('site_url', 'http://'.$_SERVER['HTTP_HOST'].$root);
$smarty->assign('template_url', 'http://'.$_SERVER['HTTP_HOST'].$root.'templates');


$smarty->assign('navItems', array(  'Accueil'=> array(),
                                    'Informations' => array(),
                                    'Activités' => array(),
                                    'Engagements' => array(),
                                    'Ressources Humaines' => array("Valeurs", "Offres", "Candidature"),
                                    'Contact' => array()));
                  



$url = '';
$url = $params[0];


if(!$smarty->templateExists($url.'.tpl')) {
	header("Location: ".$root.$defaultPageName);
} else {
	$smarty->assign('page', $url);
	$smarty->display($url.'.tpl');
}