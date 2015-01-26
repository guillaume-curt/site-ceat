{strip}
{$items = array("Accueil", "Informations", "Activités", "Engagements", "Ressources Humaines", "Contact")}
   

<div class="col-md-12" id="footer">
    <div class="col-md-2">
        <img src="{$template_url}/img/logo-ceat.png" id="logo-footer">
        <h5>Copyright © 2014 CEAT Electronique.<br>All Rights Reserved</h2>
    </div>
    <div class="col-md-3" id="coordonnees">
        <div class="col-md-12">
            <img src="{$template_url}/img/icon-green-1.png" class="icon-green">
            <p>Rue du 19 Mars 1962, 21600 Longvic</p>
        </div>
        <div class="col-md-12">
            <img src="{$template_url}/img/icon-green-2.png" class="icon-green">
            <p>contact@ceat-electronique.fr</p>
        </div>
        <div class="col-md-12">
            <img src="{$template_url}/img/icon-green-3.png" class="icon-green">
            <p>03 80 46 01 34</p>
        </div>
        <div class="col-md-12">
            <img src="{$template_url}/img/icon-green-4.png" class="icon-green">
            <p>03 80 46 01 34</p>
        </div>       
    </div>
    
    <div class="col-md-6" id="sous-menu">
        <ul>
{foreach from=$items item=item}
            <li>
                <a href="{$site_url}{$item|lower|strip:'-'}" title="$item">{$item}</a>
            </li>
{/foreach}
        </ul>
        

        
    </div>
    <div class="col-md-1">
        <a href="#" id="bouton">V</a> 
    </div>
</div>

