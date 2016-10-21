<form id="form" class="form-horizontal valid-me" action="nl_etape1.php" method="post" role="form">

    
 
        
        <input type="hidden" name="id_user" id="id_user" value="<?php if($check_etape['id_user']){echo $check_etape['id_user'];}else{echo $_SESSION['id_user'];}; ?>"> 
        <input type="hidden" name="id_class" id="id_class" value="<?php  if($check_etape['id_class']){echo $check_etape['id_class'];}else{echo $_SESSION['id_class'];};?>"> 
        <input type="hidden" name="id_pds" id="id_pds" value="<?php if($check_etape['id_pds']){ echo  $check_etape['id_pds'];}  ?>"> 
        <input type="hidden" name="cat" id="cat" value="<?php if($check_etape['lettre_pds']){ echo  $check_etape['lettre_pds'];}  ?>"> 
                                        <input type="hidden" class="form-control"  id="latitude" name="latitude" value="<?php echo $check_etape['latitude']; ?>" />
                                        <input type="hidden" class="form-control"  id="longitude" name="longitude" value="<?php echo $check_etape['longitude']; ?>" /> 
		  
        
        <input type="hidden" name="langue_user" id="langue_user" value="<?php 
		echo $check_etape['langue_user'] ;
		?>"> 

     <div class="form-group">
      <label for="votreemail" class="col-sm-3 control-label">Vul uw email-adres in</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="mylogin" id="mylogin" data-validetta="required,email" value="<?php echo $check_etape['login']; ?>"> 
      </div>
    </div>
    
    <div class="form-group">
      <label for="pass" class="col-sm-3 control-label">Kies een paswoord</label>
      <div class="col-xs-4">
        <input type="password" class="form-control" name="password" id="password" data-validetta="required"  value="<?php echo $check_etape['password']; ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label for="confpass" class="col-sm-3 control-label">Bevestig uw paswoord</label>
      <div class="col-xs-4">
        <input type="password" class="form-control" id="confpassword" name="confpassword" data-validetta="required,equal[password]" value="<?php echo $check_etape['password']; ?>" >
      </div>
    </div>
     
              
  <div class="form-group">
    <label for="bureau" class="col-sm-3 control-label">Naam van het bedrijf</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="bureau" name="bureau" value="<?php echo $check_etape['bureau']; ?>"  data-validetta="required">
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info" /></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Landschapsarchitect Bert Van Daele</p>
    </div>
    
 </div>
 
 
  
  <div class="form-group">
    <label for="collaborateurs" class="col-sm-3 control-label">Voornamen en namen van de bedrijfsleider(s) en/of van de eventuele medewerkers</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="collaborateurs" name="collaborateurs" value="<?php echo $check_etape['collaborateurs']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik geen afkortingen aub. Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Bert Van Daele, Paul Deboers & Ludo Janssens</p>
    </div>
 </div>
 
 
 <div class="form-group">
    <label for="adresse" class="col-sm-3 control-label">Adres (Straat, Laan,…) en straatnummer</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $check_etape['adresse']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik geen afkortingen aub. Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Dendermondsesteenweg 1256</p>
    </div>
 </div>
 
 
 <div class="form-group">
    <label for="cp" class="col-sm-3 control-label">Postcode</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="cp" name="cp" value="<?php echo $check_etape['cp']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tik hier de vier cijfers van uw postcode in."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">1745</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="localite" class="col-sm-3 control-label">Plaats</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="localite" name="localite" value="<?php echo $check_etape['localite']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Mazenzele</p>
    </div>
 </div>
 <?php /*
 
  <div class="form-group"> 
                                        <label for="us3-address"  class="col-sm-3 control-label"> Adres (Straat, Laan,…) Straatnummer,<br/> Postcode Plaats</label>  
                                        <div class="col-xs-4">
 								 <input type="text" class="form-control" id="us3-address" data-validetta="required" value="<?php echo $check_etape['adresse'].' '.$check_etape['cp'].' '.$check_etape['localite']?>"/>
                                        <input type="hidden" class="form-control" id="us5-street1"  name="adresse"  value="<?php echo $check_etape['adresse']?>">  
                                        <input type="hidden" class="form-control" id="us5-city" name="localite" value="<?php echo $check_etape['localite']?>">   
                                        <input type="hidden" class="form-control" id="us5-zip" name="cp"  value="<?php echo $check_etape['cp']?>">
                                        <input type="hidden" class="form-control"  id="us3-lat" name="latitude" value="<?php echo $check_etape['lat']?>"/>
                                        <input type="hidden" class="form-control"  id="us3-lon" name="longitude" value="<?php echo $check_etape['lg']?>"/> 
                                   <div id="us3" style="width: 510px; height: 400px;margin:20px 0 0"></div> 
                                     </div>                                       
                                           
                                     
								  <script>
                                      function updateControls(addressComponents) {
                                          $('#us5-street1').val(addressComponents.addressLine1);
                                          $('#us5-city').val(addressComponents.city); 
                                          $('#us5-zip').val(addressComponents.postalCode); 
                                                  }
                                                  
                                      $('#us3').locationpicker({
                                        radius: 0,
                                          location: {latitude: <?php echo $lat == '' ? $check_etape['lat'] : $lat ?>, longitude:  <?php echo $lg == '' ? $check_etape['lg'] : $lg ?>}, 
                                          inputBinding: {  
                                              latitudeInput: $('#us3-lat'),
                                              longitudeInput: $('#us3-lon'),
                                              locationNameInput: $('#us3-address')
                                          },
                                          enableAutocomplete: true,
                                          onchanged: function (currentLocation, radius, isMarkerDropped) {
                                              // Uncomment line below to show alert on each Location Changed event
                                              //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                                              
                                                          var addressComponents = $(this).locationpicker('map').location.addressComponents;
                                                          updateControls(addressComponents);
                                                          
                                          }, 
                                          
                                          oninitialized: function(component) {
                                              var addressComponents = $(component).locationpicker('map').location.addressComponents;
                                              updateControls(addressComponents);
                                          }
                                                      
                                      });
										
										$('body').on("click", ".correction", function () {
											$('#us3').locationpicker('autosize');
										});
                                 </script> 
                 
        <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gelieve uw adres voluit in te geven inclusief de nodige spaties en met een komma tussen de huisnummer en de postcode. Ons programma zal u een adres voorstellen. Indien dit voorstel exact is, klik er dan op ter bevestiging en ga verder met het volgende invulveld. Mocht het voorgestelde adres niet correct zijn, gelieve er dan niet op te klikken maar rechtstreeks verder te gaan naar het volgende veld."><img src="../img/question.png" alt="info"></button>
    </div> 
 </div>     
  
   */ ?>
  
  <div class="form-group">
    <label for="tel1" class="col-sm-3 control-label">Telefoon # 01 (vaste lijn of gsm)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="tel1" name="tel1" value="<?php echo $check_etape['tel1']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier uw telefoon- of gsm-nummer in, te beginnen met het kengetal (zonenummer), vervolgens, na de schuine streep, de cijfersgroepen gescheiden door een punt. Gaat het over een gsm-nummer, begin met het kengetal (4 cijfers), vervolgens, na de schuine streep, de eerste groep van 3 cijfers, dan een punt, dan de tweede groep van 3 cijfers. Bedankt om de nationale vorm te gebruiken en niet de internationale. Dus geen +32 en andere haakjes."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">053/18.52.40</p>
    </div>
    
 </div>
 
 <div class="form-group">
    <label for="tel2" class="col-sm-3 control-label">Eventele telefoon # 02 (vaste lijn of gsm)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="tel2" name="tel2" value="<?php echo $check_etape['tel2']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier uw eventuele tweede telefoon- of gsm-nummer in, te beginnen met het kengetal (zonenummer), vervolgens, na de schuine streep, de cijfersgroepen gescheiden door een punt. Gaat het over een gsm-nummer, begin met het kengetal (4 cijfers), vervolgens, na de schuine streep, de eerste groep van 3 cijfers, dan een punt, dan de tweede groep van 3 cijfers. Bedankt om de nationale vorm te gebruiken en niet de internationale. Dus geen +32 en andere haakjes."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0476/759.789</p>
    </div>
    
 </div>
 <?php /* 
 <div class="form-group">
    <label for="gsm" class="col-sm-3 control-label">Gsm # 01<br />(exclusief gsm-nummer)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="gsm" name="gsm" value="<?php echo $check_etape['gsm1']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier uw gsm-nummer in. Te beginnen met het kengetal (4 cijfers), vervolgens, na de schuine streep, de eerste groep van drie cijfers, dan een punt, dan de tweede groep van drie cijfers. Bedankt om de nationale vorm te gebruiken en niet de internationale vorm. Dus geen +32 en andere haakjes."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0475/856.877</p>
    </div>
    
 </div>
 
 <div class="form-group">
    <label for="gsm2" class="col-sm-3 control-label">Gsm # 02<br />(exclusief gsm-nummer)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="gsm2" name="gsm2" value="<?php echo $check_etape['gsm2']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier een (eventuele) tweede gsm-nummer in. Te beginnen met het kengetal (4 cijfers), vervolgens, na de schuine streep, de eerste groep van drie cijfers, dan een punt, dan de tweede groep van drie cijfers. Bedankt om de nationale vorm te gebruiken en niet de internationale vorm. Dus geen +32 en andere haakjes."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0476/444.719</p>
    </div>
    
 </div>
 */ ?>
 
 <div class="form-group">
    <label for="fax" class="col-sm-3 control-label">Fax</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="fax" name="fax" value="<?php echo $check_etape['fax']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier uw faxnummer in, te beginnen met het kengetal (zonenummer), vervolgens, na de schuine streep, de cijfersgroepen gescheiden door een punt. Bedankt om de nationale vorm te gebruiken en niet de internationale. Dus geen +32 en andere haakjes."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">053/18.52.50</p>
    </div>
    
 </div>
 
 
 
 <div class="form-group">
    <label for="mailoffice" class="col-sm-3 control-label">Email-adres</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="mailoffice" name="mailoffice" value="<?php echo $check_etape['mail_office']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Voer hier het email-adres in dat in het ebook moet verschijnen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">info@archi-vandaele.be</p>
    </div>
    
 </div>
  
  <div class="form-group">
    <label for="site" class="col-sm-3 control-label">Website (optioneel)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="site" name="site" value="<?php echo $check_etape['site']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier het adres van uw website in. Te beginnen met www. Of, indien dit adres geen www heeft, met http://"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">www.archi-vandaele.be</p>
    </div>    
 </div>
   
  <div class="form-group">    
    <div class="col-sm-3"></div>
    <div class="col-xs-4">
     <a href="pdf/garden_no_website_nl.pdf" target="_blank"  style="color:#0033ff;">Klik hier indien u over geen website beschikt</a>
    </div>    
    <div class="col-xs-1"> 
    </div>
    <div class="col-xs-4"> 
    </div>
 </div>
 
  <div class="form-group">
    <label for="site_ebook" class="col-sm-3 control-label">Mijn pagina op de website van het ebook</label>
    <div class="col-xs-4 input-group">    
  		<span class="input-group-addon" id="basic-addon2">www.inenrondmijntuin.be/</span>
      <input type="text" class="form-control" id="site_ebook" name="site_ebook" value="<?php echo $check_etape['site_ebook']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef hier de naam in die u wenst te reserveren voor uw (gratis) pagina op onze raadplegingswebsite www.inenrondmijntuin.be. Hou er rekening mee dat een domeinnaam geen punten of accenten mag bevatten."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">www.inenrondmijntuin.be/vandaele</p>
    </div>
 </div>
  
  <h1>Gegevens van de invuller van dit formulier</h1>
  
  <div class="form-group">
    <label for="nomuser" class="col-sm-3 control-label">Naam</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="nomuser" name="nomuser" value="<?php echo $check_etape['nom_user']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Vermaele</p>
    </div>
    
 </div>
 
 <div class="form-group">
    <label for="prenomuser" class="col-sm-3 control-label">Voornaam</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="prenomuser" name="prenomuser" value="<?php echo $check_etape['prenom_user']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Sandra</p>
    </div>
    
 </div>
 
 <div class="form-group">
    <label for="fonction" class="col-sm-3 control-label">Functie in het bedrijf</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="fonction" name="fonction" value="<?php echo $check_etape['fonction']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik hoofdletters en kleine letters waar nodig. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Secretaresse, Public relations</p>
    </div>
    
 </div>
  
  
  <div class="form-group">
    <label for="teluser" class="col-sm-3 control-label">Telefoon- of gsm-nummer waar u<br/>het makkelijkst te bereiken bent</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="teluser" name="teluser" value="<?php echo $check_etape['gsm_user']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Normaal gezien zouden wij u niet moeten contacteren, maar wie weet ? Vermeld liefst een gsm-nummer."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0485/426.781</p>
    </div>
    
 </div>
 
 <div class="form-group">
    <label for="mail_user" class="col-sm-3 control-label">Persoonlijk email-adres</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="mail_user" name="mail_user" value="<?php echo $check_etape['mail_user']; ?>" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Normaal gezien zouden wij u niet moeten contacteren, maar wie weet ? Het email-adres dat u hier ingeeft is uw persoonlijke email-adres. Dit kan een ander adres zijn dan het algemene email-adres van uw firma (zie hierboven). Dit adres wordt niet in het repertorium opgenomen en wordt door ons gebruikt om u de bevestigingsemails op te sturen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">sandra@archi-vandaele.be</p>
    </div>    
 </div>
 
  <div class="form-group">
    <label for="site" class="col-sm-3 control-label">Is uw bedrijf bij een beroepsvereniging aangesloten? Vul hier haar naam in</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="association" name="association" value="<?php echo $check_etape['association']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Vul hier de naam in van deze beroepsvereniging, indien u bij zo'n vereniging aangesloten bent."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Belhgische Bond van de Landschapsarchitecten</p>
    </div>
 </div>
 
  <h1>Gegevens voor de facturatie</h1>
  
  <div class="form-group">
    <label for="facturation_nom" class="col-sm-3 control-label">Officiële benaming van uw firma</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_nom" name="facturation_nom" value="<?php echo $check_etape['facturation_nom']; ?>"  data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top"   title="Geef hier de officiële benaming van de firma in die onze factuur zal ontvangene."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">LABVD</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="facturation_juridique" class="col-sm-3 control-label">Rechtsvorm</label>
    <div class="col-xs-4">
      <select class="form-control" name="facturation_juridique" id="facturation_juridique">
      		<option>-</option>        	
            <option <?php if($check_etape['facturation_juridique'] =='Natuurlijke persoon - Eenmanszaak') { echo 'selected'; } ?> value="Natuurlijke persoon - Eenmanszaak">Natuurlijke persoon - Eenmanszaak</option>
            <option <?php if($check_etape['facturation_juridique'] =='Nameloze venootschap (NV)') { echo 'selected'; } ?> value="Nameloze venootschap (NV)">Nameloze venootschap (NV)</option>
            <option <?php if($check_etape['facturation_juridique'] =='Besloten vennootschap met beperkte aansprakelijkheid (BVBA)') { echo 'selected'; } ?> value="Besloten vennootschap met beperkte aansprakelijkheid (BVBA)">Besloten vennootschap met beperkte aansprakelijkheid (BVBA)</option>
            <option <?php if($check_etape['facturation_juridique'] =='Starter - Besloten vennootschap met beperkte aansprakelijkheid (S-BVBA)') { echo 'selected'; } ?> value="Starter - Besloten vennootschap met beperkte aansprakelijkheid (S-BVBA)">Starter - Besloten vennootschap met beperkte aansprakelijkheid (S-BVBA)</option>
            <option <?php if($check_etape['facturation_juridique'] =='Coöperatieve vennootschap met onbeperkte aansprakelijkheid (CVOA)') { echo 'selected'; } ?> value="Coöperatieve vennootschap met onbeperkte aansprakelijkheid (CVOA)">Coöperatieve vennootschap met onbeperkte aansprakelijkheid (CVOA)</option>
            <option <?php if($check_etape['facturation_juridique'] =='Coöperatieve vennootschap met beperkte aansprakelijkheid (CVBA)') { echo 'selected'; } ?> value="Coöperatieve vennootschap met beperkte aansprakelijkheid (CVBA)">Coöperatieve vennootschap met beperkte aansprakelijkheid (CVBA)</option>
            <option <?php if($check_etape['facturation_juridique'] =='Commanditaire venootschap op aandelen') { echo 'selected'; } ?> value="Commanditaire venootschap op aandelen">Commanditaire venootschap op aandelen</option>
            <option <?php if($check_etape['facturation_juridique'] =='Gewone commanditaire vennootschap (Comm.V.)') { echo 'selected'; } ?> value="Gewone commanditaire vennootschap (Comm.V.)">Gewone commanditaire vennootschap (Comm.V.)</option>
            <option <?php if($check_etape['facturation_juridique'] =='Vennootschap onder firma (VOF)') { echo 'selected'; } ?> value="Vennootschap onder firma (VOF)">Vennootschap onder firma (VOF)</option>
        </select>
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Kies in de drop-down lijst."><img src="../img/question.png" alt="info"></button>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_adresse" class="col-sm-3 control-label">Adres (Straat, Laan,…) en straatnummer<br/>(+ eventele bus)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_adresse" name="facturation_adresse" value="<?php echo $check_etape['facturation_adresse']; ?>"  data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef het adres van uw sociale zetel in. Geen afkortingen aub. Gebruik hoofdletters en kleine letters waar nodig."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Kruisbeeldstraat 18</p>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_cp" class="col-sm-3 control-label">Postcode</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_cp" name="facturation_cp" value="<?php echo $check_etape['facturation_cp']; ?>"  data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tik hier de 4 cijfers van uw postcode in."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">9220</p>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_localite" class="col-sm-3 control-label">Plaats</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_localite" name="facturation_localite" value="<?php echo $check_etape['facturation_localite']; ?>"  data-validetta="required" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Gebruik hoofdletters en kleine letters waar nodig. Geen afkortingen. Vergeet ook niet de vereiste accenten en koppeltekens te plaatsen."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Hamme</p>
    </div>
 </div> 
  <div class="form-group">
    <label for="facturation_tva" class="col-sm-3 control-label">BTW-nummer</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_tva" name="facturation_tva" value="<?php echo $check_etape['facturation_tva']; ?>"  data-validetta="required" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Geef uw BTW-nummer in, onder de volgende vorm : de letters BE, vervolgens een spatie, dan de 0 en 3 cijfers, dan een punt en 3 cijfers, dan nog een punt en 3 cijfers."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">BE 0123.456.789</p>
    </div>
 </div> 
  <div class="form-group">
    <label for="num_enregistrement" class="col-sm-3 control-label">Bent u een erkende aannemer ?<br/>Vul uw registratienummer in</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="num_enregistrement" name="num_enregistrement" value="<?php echo $check_etape['num_enregistrement']; ?>" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Vul uw registratienummer in."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">24.18.16</p>
    </div>
 </div> 
 
  <div class="form-group">
      <div class="col-sm-3">
      <input type="checkbox" <?php if($check_etape['conditions'] == 'ja'  || $check_etape['conditions'] == 'oui') { echo 'checked = "checked"'; } ?> id="conditions" name="conditions" value="ja" data-validetta="required" >
    </div> 
    <label for="conditions" class="col-xs-4 control-label  text-left">Ik heb uw <a href="pdf/conditions_generales_nl.pdf"  target="_blank"  style="color:#0033ff;"><u>algemene voorwaarden</u></a> gelezen en ik aanvaard ze.</label>
   
    <div class="col-xs-1">
      <button type='button' tabindex='-1' class='toolbut' data-toggle='tooltip' data-placement='top' title='Klik op "algemene voorwaarden" om de link te openen. Lees aandachig deze voorwaarden en vink dit invulvakje aan om ons te bevestigen dat u ze aanvaardt.'><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block"></p>
    </div>
 </div> 
 
  <div class="form-group">  
  <div class="col-sm-3">
      <input type="checkbox" <?php if($check_etape['confirmation'] == 'ja' || $check_etape['confirmation'] == 'oui' ) { echo 'checked = "checked"'; } ?> id="confirmation" name="confirmation" value="ja" data-validetta="required" >
    </div> 
    <label for="confirmation" class="col-xs-4 control-label  text-left">Ik vink dit invulvakje aan en accepteer dat de uitgever mij het bedrag van 90 € excl. BTW bij verschijning van het ebook zal factureren. Ik verbind me deze factuur contant te betalen.</label>
     
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Vink dit invulvakje aan om uw inschrijving te bevestigen."><img src="../img/question.png" alt="info"></button>
    </div> 
 </div> 
 
 
  
<div class="form-group">
    <div class="col-xs-offset-3 col-xs-10">
     <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="verif" class="btn btn-default btn-lg btn-blue">Controleren</button>
    </div>
  </div>

  
</form>
