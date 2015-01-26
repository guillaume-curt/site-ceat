{strip}
{assign "find" array('á','à','â','ä','ã','å','ç','é','è','ê','ë','í','ì','î','ï','ñ','ó','ò','ô','ö','õ','ú','ù','û','ü','ý','ÿ')}
{assign "repl" array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y')}

{$items = array("Accueil", "Informations", "Activités", "Engagements", "Ressources Humaines", "Contact")}


<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="logo">
                <a href="#">
                    <img src="{$template_url}/img/logo-ceat.png">
                </a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse menu">
            <ul class="nav navbar-nav">
{foreach from=$items item=item}
                <li class="active">
                    <a href="{$site_url}{$item|replace:$find:$repl|lower|strip:'-'}" title="$item">{$item}</a>
                </li>
{/foreach}
            </ul>
        </div>
    </div>
</nav>





{strip}




