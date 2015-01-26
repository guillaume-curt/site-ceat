{strip}
<!DOCTYPE html>
<html lang="fr">
  <head>
{include file="common/header.tpl" title=test name=test}
  </head>
  <body id="page-home">

  {include file="common/navigation.tpl" title=test name=test}
  {include file="content/accueil/carousel.tpl" title=test name=test}

{include file="content/accueil/qui-sommes-nous.tpl"} 
{include file="content/accueil/historique.tpl"}
{include file="content/accueil/activites.tpl"} 
{include file="content/accueil/promo.tpl"} 
{include file="content/accueil/engagement.tpl"}
{include file="content/accueil/contact.tpl"}
{include file="content/accueil/partenaires.tpl"} 

{include file="common/copyright.tpl"}
{include file="common/footer.tpl"}
  </body>
</html>
{/strip}