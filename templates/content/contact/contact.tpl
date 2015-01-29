{strip}
    <!-- begin:contact -->
    <div id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-title">
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{$template_url}/img/icon-map/contact.png" class="img-responsive" id="logo-contact-us">
                </div>
                <h2 id="contact-us">Nous contacter</h2>

            </div>
          </div>
        </div>
        <!-- break -->
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <form role="form" class="contact-form">
              <div class="form-group">
                <label for="name" class="sr-only">Nom</label>
                <input type="text" class="form-control input-lg" id="author" placeholder="Nom: " required>
                <span class="form-focus-icon focus-icon-name"></span>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control input-lg" id="email" placeholder="Email: " required>
                <span class="form-focus-icon focus-icon-mail"></span>
              </div>
              <div class="form-group">
                <label for="phone" class="sr-only">T&eacute;l&eacute;phone</label>
                <input type="text" class="form-control input-lg" id="phone" placeholder="T&eacute;l&eacute;phone: " required>
                <span class="form-focus-icon focus-icon-phone"></span>
              </div>

              <div class="form-group">
                <label for="motif" class="sr-only">Motif</label>
                <select class="form-control" id="motif" >
                  <option selected="true" disabled="disabled">Motif de la demande</option>
                  <option>Commerciale</option>
                  <option>Technique</option>
                  <option>Emplois et carrières</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea class="form-control input-lg" id="message" placeholder="Message: " rows="3" required></textarea>
                <span class="form-focus-icon focus-icon-message"></span>
              </div>
              <button type="submit" class="btn btn-lucky btn-lg"><i class="fa fa-envelope-o"></i> Envoyer</button>
            </form>
          </div>

    <div class="col-md-6 col-sm-12" id="batiment">
        <img src="{$template_url}/img/batiment.png" class="img-responsive">
    </div>


        </div>
      </div>
    </div>
    <!-- end:contact -->
{/strip}
