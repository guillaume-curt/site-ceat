{strip}
{$carouselId = "activites-carousel"}
    <!-- begin:historique -->
    <div id="activites">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Activit&eacute;s</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="{$carouselId}" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">

        <div class="item active">
          <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-5 col-md-push-1 col-md-push-1">
                    <div class="service-content">
                        <h3>Réparations</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <span class="service-icon"> <i class="fa fa-heart-o"></i></span>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 col-md-push-1 col-md-push-1">
                    <div class="service-content">
                        <h3>Service client</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <span class="service-icon"> <i class="fa fa-heart-o"></i></span>
                    </div>
                </div>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-5 col-md-push-1 col-md-push-1">
                    <div class="service-content">
                        <h3>Systèmes informatiques</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <span class="service-icon"> <i class="fa fa-heart-o"></i></span>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 col-md-push-1 col-md-push-1">
                    <div class="service-content">
                        <h3>Formation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <span class="service-icon"> <i class="fa fa-heart-o"></i></span>
                    </div>
                </div>

            </div>
          </div>
        </div>

         <div class="item">
          <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-5 col-md-push-1 col-md-push-1">
                    <div class="service-content">
                        <h3>Logistique</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <span class="service-icon"> <i class="fa fa-heart-o"></i></span>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 col-md-push-1 col-md-push-1">
                    <div class="service-content">
                        <h3>Recherche et développement</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
                        <span class="service-icon"> <i class="fa fa-heart-o"></i></span>
                    </div>
                </div>

            </div>
          </div>
        </div>

      <a class="left carousel-control" href="#{$carouselId}" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="right carousel-control" href="#{$carouselId}" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>

      <ol class="carousel-indicators">
          <li data-target="#{$carouselId}" data-slide-to="0" class="active"></li>
          <li data-target="#{$carouselId}" data-slide-to="1"></li>
          <li data-target="#{$carouselId}" data-slide-to="2"></li>
       </ol>

     </div>

    </div>
    <!-- end:historique -->
{/strip}

{*}
<div class="col-md-12" id="activites">
    <div class="container">
        <h1>Que faisons nous ?</h1>
    </div>
    <div class="col-md-1">        
        <a href="#" id="left-button"><div class="glyphicon glyphicon-chevron-left"></div></a>
    </div>
    <div class="activite1">
    <div class="col-md-4">        
        <img src="{$template_url}/img/icon1.png" class="icon hover">
        <h2>Réparations</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an  non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Fuerit toto in consulatu sine provincia, cui fuerit, antequam </p>        
    </div>    
    <div class="col-md-4 col-md-offset-2">  
        <img src="{$template_url}/img/icon2.png" class="icon hover">
        <h2>Service client</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an  non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Fuerit toto in consulatu sine provincia, cui fuerit, antequam </p>        
    </div>
    </div>
    <div class="activite2 display-none">
    <div class="col-md-4">
        <img src="{$template_url}/img/icon3.png" class="icon hover">
        <h2>Systèmes informatiques</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an  non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Fuerit toto in consulatu sine provincia, cui fuerit, antequam </p>       
    </div>
    
    <div class="col-md-4 col-md-offset-2">  
        <img src="{$template_url}/img/icon4.png" class="icon hover">
        <h2>Formation</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an  non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Fuerit toto in consulatu sine provincia, cui fuerit, antequam </p>        
    </div>
    </div>
    <div class="activite3 display-none">
    <div class="col-md-4">
        <img src="{$template_url}/img/icon5.png" class="icon hover">
        <h2>Logistique</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an  non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Fuerit toto in consulatu sine provincia, cui fuerit, antequam </p>       
    </div>
    
    <div class="col-md-4 col-md-offset-2">  
        <img src="{$template_url}/img/icon6.png" class="icon hover">
        <h2>Recherche et développement</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia. Sortietur an  non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus? Fuerit toto in consulatu sine provincia, cui fuerit, antequam </p>        
    </div>
    </div>
    <div class="col-md-1">
        <a href="#" id="right-button"><div class="glyphicon glyphicon-chevron-right"></div></a>
    </div>
<!--                                                                       
    <div class="container">
       <div class="col-md-4 col-md-offset-4">
            <div class="lien-info">
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </div>
!-->    
{/*}