{strip}
{config_load file="setup.conf"}
<!DOCTYPE html>
<html lang="fr">
  <head>
{include file="common/header.tpl" title="Accueil"}
  </head>
  <body id="page-home">

{include file="common/navigation.tpl"}
{include file="content/accueil/carousel.tpl"}

{include file="content/accueil/qui-sommes-nous.tpl"} 
{include file="content/accueil/historique.tpl"}
{include file="content/accueil/activites.tpl"} 
{include file="content/accueil/promo.tpl"} 
{include file="content/accueil/engagement.tpl"}
{include file="content/accueil/contact.tpl"}
{include file="content/accueil/partenaires.tpl"} 

{include file="common/copyright-mobile.tpl"}
{include file="common/copyright-desktops.tpl"}
{include file="common/copyright-tablet.tpl"}
{include file="common/copyright-desktops-large.tpl"}
{include file="common/footer.tpl"}
  </body>
</html>
{/strip}