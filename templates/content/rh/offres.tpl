{strip}
{$items = array("Entre 1457.52€ et 1600€", "Entre 1700€ et 1800€", "Entre 1900€ et 2000€", "Entre 2500€ et 3000€", "Entre 3500€ et 4000€", "Entre 5000€ et 6000€")}

<!-- begin:candidature -->
<div id="candidature" style="padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="engagement-page-title">
                    <h2>Déposer une candidature spontanée</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form role="form">
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" class="form-control" placeholder="Adresse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="tel" class="form-control" placeholder="Téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Poste souhaité</label>
                                <input type="text" class="form-control" placeholder="Poste souhaité">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type de contrat souhaité :</label>
                                <div class="radio">
                                    <div class="row">
                                       <div class="col-md-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="CDI">CDI
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="CDD">CDD
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="Stage">Stage
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="Alternance">Alternance
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Temps de travail souhaité :</label>
                                <div class="radio">
                                    <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" value="plein">Temps plein
                                    </label>
                                    <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox2" value="partiel">Temps partiel
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Horaires souhaités :</label>
                                <div class="radio">
                                   <div class="row">
                                       <div class="col-md-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="journee">Horaires de journée 
                                            </label>
                                       </div>
                                       <div class="col-md-4">
                                        <label class="checkbox-inline">
                                          <input type="checkbox" id="inlineCheckbox2" value="postes">Horaires postés
                                        </label>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Disponibilité :</label>
                                <div class="radio">
                                    <div class="row">
                                       <div class="col-md-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Immédiatement
                                        </label>
                                       </div>
                                       <div class="col-md-4">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Dans moins de 1 mois 
                                        </label>
                                       </div>
                                       <div class="col-md-4">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">Dans moins de 3 mois 
                                        </label>
                                       </div>
                                       <div class="col-md-4">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option3">Dans moins de 6 mois  
                                        </label>
                                       </div>
                                       <div class="col-md-4">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option3">Dans plus de 6 mois
                                        </label>
                                       </div>
                                    </div> 
                                </div>      
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Salaire brut annuel souhaité :</label>
                            <select class="form-control">
{foreach from=$items key=k item=item}
                                <option>{$item}</option>
{/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Lettre de motivation</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">CV</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="max-width: 100%;">
                           <label>Message</label>
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






                   
                   
                   








<!-- end:candidature -->
{/strip}