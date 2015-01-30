{strip}
{assign "find" array('á','à','â','ä','ã','å','ç','é','è','ê','ë','í','ì','î','ï','ñ','ó','ò','ô','ö','õ','ú','ù','û','ü','ý','ÿ')}
{assign "repl" array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','u','y','y')}
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
{$i=0}
{foreach from=$navItems key=k item=item}
{$identifier = $k|replace:$find:$repl|lower|strip:'-'}
           
{if $item|@count > 0}        
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$k} <span class="caret"></span></a>
{else}
            <li><a href="{$identifier}" {if $i==0}style="display:none"{/if}title="{$k}">{$k}</a>
{/if}
              {if $item|@count > 0}
              <ul class="dropdown-menu" role="menu">
{foreach from=$item item=ssMenu}
{$ssIdentifier = $ssMenu|replace:$find:$repl|lower|strip:'-'}
            <li><a href="{$identifier}#{$ssIdentifier}" title="{$ssMenu}">{$ssMenu}</a>
{/foreach}
              </ul>
              {/if}
{$i=$i+1}
{/foreach}
            </li>
          </ul>
        </div>
      </div>
    </nav>
{/strip}