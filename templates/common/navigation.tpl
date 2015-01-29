{strip}
{assign "find" array('á','à','â','ä','ã','å','ç','é','è','ê','ë','í','ì','î','ï','ñ','ó','ò','ô','ö','õ','ú','ù','û','ü','ý','ÿ')}
{assign "repl" array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y')}
{*}
{$items = array("Accueil", "Informations", "Activités", "Engagements", "Ressources Humaines", "Contact")}
{/*}
{$items = array("Accueil", "Informations", "Activités", "Engagements", "Contact")}
  	<nav class="navbar navbar-default navbar-fixed-top navbar-transparent" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menus" href="#header"><img src="{$template_url}/img/logo-ceat.png" height="100"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
{foreach from=$items key=k item=item}
{$identifier = $item|replace:$find:$repl|lower|strip:'-'}
            <li><a href="#{$identifier}" {if $k==0}class="visible-xs-* hidden-sm hidden-md hidden-lg"{/if}title="{$item}">{$item}</a></li>
{/foreach}
          </ul>
        </div>
      </div>
    </nav>
{/strip}