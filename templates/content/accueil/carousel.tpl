{strip}
{$carouselId = "header"}
    <div id="{$carouselId}" class="carousel slide carousel-fade" data-ride="carousel" style="background: #fff url('{$template_url}/img/bg-slider.png') center center no-repeat">
      <div class="carousel-inner">

        <div class="item active">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="slider-caption">
                  <h2 class="animated fadeInLeftBig">AFTER SALES SERVICE</h2>
                  <div class="animated fadeInDownBig">
                    <p>Phasellus quis <strong>lectus</strong> metus, at posuere neque. Sed pharetra nibh eget orci convallis <strong>at posuere</strong> leo convallis</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6"><img class="animated fadeInUpBig" src="{$template_url}/img/slide1.png"></div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-md-6"><img class="animated fadeInUpBig" src="{$template_url}/img/slide2.png"></div>
              <div class="col-md-6">
                <div class="slider-caption">
                  <h2 class="animated fadeInLeftBig">AFTER SALES SERVICE</h2>
                  <div class="animated fadeInDownBig">
                    <p>Phasellus quis <strong>lectus</strong> metus, at posuere neque. Sed pharetra nibh eget orci convallis <strong>at posuere</strong> leo convallis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="slider-caption">
                  <h2 class="animated fadeInLeftBig">AFTER SALES SERVICE</h2>
                  <div class="animated rollIn">
                    <p>Phasellus quis <strong>lectus</strong> metus, at posuere neque. Sed pharetra nibh eget orci convallis <strong>at posuere</strong> leo convallis</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6"><img class="animated fadeInUpBig" src="{$template_url}/img/slide3.png"></div>
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
{/strip}

