<form id="form" class="form-horizontal valid-me" action="etape1.php" method="post" role="form" onsubmit="return getData()">
	
	 
        
        <input type="hidden" name="id_user" id="id_user" value="<?php $_POST['id_user'] = $_SESSION['id_user'];echo $_SESSION['id_user']; ?>"> 
        <input type="hidden" name="id_class" id="id_class" value="<?php $_POST['id_class'] = $_SESSION['id_class'];echo $_SESSION['id_class']; ?>"> 
        <input type="hidden" name="id_pds" id="id_pds" value="<?php if($_SESSION['new_user']){$_POST['id_pds'] = $_SESSION['new_user'];echo  $_SESSION['new_user'];} ?>"> 
        <input type="hidden" name="cat" id="cat" value="<?php if($_SESSION['new_letter']){$_POST['cat'] = $_SESSION['new_letter'];echo  $_SESSION['new_letter'];} ?>"> 
                                        <input type="hidden" class="form-control"  id="latitude" name="latitude" value="<?php echo $_POST['latitude']; ?>" />
                                        <input type="hidden" class="form-control"  id="longitude" name="longitude" value="<?php echo $_POST['longitude']; ?>" /> 
		  
        
        <input type="hidden" name="langue_user" id="langue_user" value="<?php 
		$_POST['langue_user'] = $_SESSION['lang']; echo $_POST['langue_user'];
		?>"> 
        
        
     <div class="form-group">
      <label for="votreemail" class="col-sm-3 control-label">Encodez votre adresse e-mail</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="mylogin" id="mylogin" data-validetta="required,email" value="<?php 
		if(!$_SESSION['new_mail']){echo $_POST['mylogin'];}
		else{$_POST['mylogin'] = addslashes($_SESSION['new_mail']);echo addslashes($_SESSION['new_mail']);}
		?>" <?php if($_SESSION['user']){echo 'readonly="readonly"';}?>> 
      </div>
    </div>
    
    <div class="form-group">
      <label for="pass" class="col-sm-3 control-label">Choisissez votre mot de passe</label>
      <div class="col-xs-4">
        <input type="password" class="form-control" name="password" id="password" data-validetta="required"  value="<?php echo $_POST['password']; ?>"  <?php if($_SESSION['user']){echo 'readonly="readonly"';}?>>
      </div>
    </div>
    
    <div class="form-group">
      <label for="confpass" class="col-sm-3 control-label">Confirmez votre mot de passe</label>
      <div class="col-xs-4">
        <input type="password" class="form-control" id="confpassword" name="confpassword" data-validetta="required,equal[password]"   value="<?php echo $_POST['confpassword']; ?>"  <?php if($_SESSION['user']){echo 'readonly="readonly"';}?>>
      </div>
    </div>
    
          
          
  <div class="form-group">
    <label for="bureau" class="col-sm-3 control-label">Nom de l'entreprise</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="bureau" name="bureau" value="<?php echo $_POST['bureau']; ?>" data-validetta="required" >
        </div>
        
        <div class="col-xs-1">
          <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union."><img src="../img/question.png" alt="info"></button>
        </div>
        <div class="col-xs-4">
          <p class="help-block">Architecte paysagiste Paul Tence</p>
        </div>
 </div>
    
  <div class="form-group">
    <label for="collaborateurs" class="col-sm-3 control-label">Prénom(s) et nom(s) du ou des dirigeants <br/> et/ou du ou des collaborateurs éventuels</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="collaborateurs" name="collaborateurs" value="<?php echo $_POST['collaborateurs']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Inscrivez les prénoms et noms (dans cet ordre svp, d'abord le prénom, puis le nom et pas le contraire) du/des dirigeants et/ou collaborateurs éventuels, dans l'ordre désiré. Séparez-les par un virgule, sauf entre l'avant-dernier et le dernier, que vous séparez par une esperluette (&). Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Paul Tence, Claudine Boulangier & Jean-Pierre Dutrieux</p>
    </div>
 </div>
 
 
 <div class="form-group">
    <label for="adresse" class="col-sm-3 control-label">Adresse (Rue, Avenue,…) et numéro de rue</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $_POST['adresse']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez l'adresse en toutes lettres, sans abréviations, en utilisant les majuscules et minuscules quand elles sont nécessaires."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Boulevard Sainte-Marguerite 125 A / 41</p>
    </div>
 </div>
 
 
 <div class="form-group">
    <label for="cp" class="col-sm-3 control-label">Code postal</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="cp" name="cp" value="<?php echo $_POST['cp']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez les 4 chiffres de votre code postal"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">5310</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="localite" class="col-sm-3 control-label">Localité</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="localite" name="localite" value="<?php echo $_POST['localite']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Laeken</p>
    </div>
 </div>
 
 <?php /*
 
  <div class="form-group">
 
                                        <label for="us3-address" class="col-sm-3 control-label">Adresse (Rue, Avenue,…) Numéro de rue,<br/>Code postal Localité</label>  
                                       <div class="col-xs-4">  
                                       
                                        <input type="text" class="form-control" id="us3-address" data-validetta="required" placeholder="Votre adresse" />
                                        <input type="hidden" class="form-control" id="us5-street1"  name="adresse" >  
                                        <input type="hidden" class="form-control" id="us5-city" name="localite">   
                                        <input type="hidden" class="form-control" id="us5-zip" name="cp" >
                                        <input type="hidden" class="form-control"  id="us3-lat" name="latitude"/>
                                        <input type="hidden" class="form-control"  id="us3-lon" name="longitude"/> 
                                  		<div id="us3" style="width: 510px; height: 400px;margin:20px 0  "></div> 
                                        
                                       </div>                                    
                                           
                                     
								  <script>
                                      function updateControls(addressComponents) {
                                          $('#us5-street1').val(addressComponents.addressLine1);
                                          $('#us5-city').val(addressComponents.city); 
                                          $('#us5-zip').val(addressComponents.postalCode); 
                                                  }
                                                  
                                      $('#us3').locationpicker({
                                        radius: 0, 
  										  zoom: 12,  
                                          location: {latitude: <?php echo $_POST['latitude'] == '' ? '50.8560983' : $_POST['latitude'] ?>, longitude:  <?php echo $_POST['longitude'] == '' ? '4.2961343' : $_POST['longitude']  ?>}, 
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
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez votre adresse en toutes lettres avec les espaces nécessaires en mettant une virgule entre le numéro de rue et le code postal. Notre programmation va vous proposer une adresse. Si celle-ci est exacte, cliquez sur cette proposition pour la confirmer puis passez au champ suivant. Si la proposition n'est pas exacte, ne cliquez pas sur cette proposition et passez directement au champ suivant.
"><img src="../img/question.png" alt="info"></button>
    </div> 
 </div>     
  */ ?>
  
  <div class="form-group">
    <label for="tel1" class="col-sm-3 control-label">Téléphone # 01 (ligne fixe ou gsm)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="tel1" name="tel1" value="<?php 
		if(!$_SESSION['new_tel']){echo $_POST['tel1'];}
		else{$_POST['tel1'] = addslashes($_SESSION['new_tel']);echo addslashes($_SESSION['new_tel']);}
		?>" data-validetta="required" >
    </div>
   
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre numéro de téléphone ou de gsm, d'abord avec les chiffres du préfixe puis, après la barre oblique, les groupes de chiffres séparés par un point. S'il s'agit d'un numéro de gsm, commencez avec le préfixe (4 chiffres) puis, après le slach, le premier groupe de 3 chiffres, puis un point, puis le second groupe de 3 chiffres (exemple : 0476/753.963). Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international. Donc pas de +32 ou de parenthèses."><img src="../img/question.png" alt="info"></button>
    </div>
     <div class="col-xs-4">
      <p class="help-block">081/20.42.58</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="tel2" class="col-sm-3 control-label">Téléphone # 02 éventuel (ligne fixe ou gsm)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="tel2" name="tel2" value="<?php 
		if(!$_SESSION['new_tel2']){echo $_POST['tel2'];}
		else{$_POST['tel2'] = addslashes($_SESSION['new_tel2']);echo addslashes($_SESSION['new_tel2']);}
		?> " >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre éventuel deuxième numéro de téléphone ou de gsm, d'abord avec les chiffres du préfixe puis, après la barre oblique, les groupes de chiffres séparés par un point. S'il s'agit d'un numéro de gsm, commencez avec le préfixe (4 chiffres) puis, après le slach, le premier groupe de 3 chiffres, puis un point, puis le second groupe de 3 chiffres (exemple : 0476/753.963). Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international. Donc pas de +32 ou de parenthèses."><img src="../img/question.png" alt="info"></button>
    </div>
    
    <div class="col-xs-4">
      <p class="help-block">0476/759.789</p>
    </div>
 </div>
 <?php /* 
 <div class="form-group">
    <label for="gsm" class="col-sm-3 control-label">Gsm # 01<br />(numéro de portable uniquement)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="gsm" name="gsm" value="<?php echo $_POST['gsm']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre gsm d'abord avec les chiffres du préfixe (4 chiffres) puis, après la barre oblique, un premier groupe de 3 chiffres, puis un point, puis le second groupe de trois chiffres. Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0475/856.877</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="gsm2" class="col-sm-3 control-label">Gsm # 02 éventuel<br />(numéro de portable uniquement)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="gsm2" name="gsm2" value="<?php echo $_POST['gsm2']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre gsm d'abord avec les chiffres du préfixe (4 chiffres) puis, après la barre oblique, un premier groupe de 3 chiffres, puis un point, puis le second groupe de trois chiffres. Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0476/444.719</p>
    </div>
 </div>
 */ ?>
 
 <div class="form-group">
    <label for="fax" class="col-sm-3 control-label">Fax</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="fax" name="fax" value="<?php echo $_POST['fax']; ?>" >
    </div>
   
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre fax d'abord avec les chiffres du préfixe puis, après la barre oblique, les groupes de chiffres séparés par un point. Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international."><img src="../img/question.png" alt="info"></button>
    </div>
     <div class="col-xs-4">
      <p class="help-block">081/21.45.89</p>
    </div>
 </div>
 
 
 
 <div class="form-group">
    <label for="mailoffice" class="col-sm-3 control-label">Adresse e-mail</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="mailoffice" name="mailoffice" value="<?php 
		if(!$_SESSION['new_mail']){echo $_POST['mailoffice'];}
		else{$_POST['mailoffice'] = addslashes($_SESSION['new_mail']);echo addslashes($_SESSION['new_mail']);}
		?>" data-validetta="required,email" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez l'adresse e-mail que vous souhaitez voir reproduite dans l'ebook."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">info@archi-pol-tence.be</p>
    </div>
    
 </div>
  
  <div class="form-group">
    <label for="site" class="col-sm-3 control-label">Site internet éventuel</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="site" name="site" value="<?php echo $_POST['site']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez l'adresse de votre site internet en commençant par www. Ou, s'il ne comporte pas de www, par http://."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">www.arch-pol-tence.be</p>
    </div>
 </div>
 
  <div class="form-group">    
    <div class="col-sm-3"></div>
    <div class="col-xs-4">
     <a href="pdf/garden_no_website_fr.pdf" target="_blank"  style="color:#0033ff;"><u>Cliquez ici si vous n'avez pas de site internet</u></a>
    </div>    
    <div class="col-xs-1"> 
    </div>
    <div class="col-xs-4"> 
    </div>
 </div>
 
  <div class="form-group">
    <label for="site_ebook" class="col-sm-3 control-label">Ma page dédiée sur le site internet de l'ebook</label>
    <div class="col-xs-4 input-group">    
  		<span class="input-group-addon" id="basic-addon2">www.monjardinsesabords.be/</span>
      <input type="text" class="form-control" id="site_ebook" name="site_ebook" value="<?php echo $_POST['site_ebook']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Remplissez dans ce cadre le nom que vous désirez que nous donnions à votre page (gratuite) sur notre site de consultation www.monjardinsesabords.be. N'oubliez pas qu'un nom de domaine ne peut contenir ni des lettres avec des accents, ni des points."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">www.monjardinsesabords.be/poltence</p>
    </div>
 </div>
  
  
  
  
  <h1>Données de l'encodeur de ce formulaire</h1>
  
  <div class="form-group">
    <label for="nomuser" class="col-sm-3 control-label">Nom</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="nomuser" name="nomuser" style="padding:6px 12px; text-align:left;" value="<?php echo $_POST['nomuser']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Dutrieux</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="prenomuser" class="col-sm-3 control-label">Prénom</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="prenomuser" name="prenomuser" value="<?php  echo $_POST['prenomuser']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Jean-Pierre</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="fonction" class="col-sm-3 control-label">Fonction dans la société</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="fonction" name="fonction" value="<?php echo $_POST['fonction']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Gérant</p>
    </div>
 </div>
  
  
  <div class="form-group">
    <label for="teluser" class="col-sm-3 control-label">Numéro de téléphone ou gsm où l'on peut vous joindre le plus facilement</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="teluser" name="teluser" value="<?php 
		if(!$_SESSION['new_tel']){echo $_POST['teluser'];}
		else{$_POST['teluser'] = addslashes($_SESSION['new_tel']);echo addslashes($_SESSION['new_tel']);}
		?> " data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Notre site est ainsi fait que nous ne devrons normalement pas entrer en contact direct avec vous par téléphone, mais sait-on jamais ? Merci d'indiquer ici de préférence un numéro de gsm."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0485/426.781</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="mail_user" class="col-sm-3 control-label">Adresse e-mail personnelle</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="mail_user" name="mail_user" value="<?php 
		if(!$_SESSION['new_mail']){echo $_POST['mail_user'];}
		else{$_POST['mail_user'] = addslashes($_SESSION['new_mail']);echo addslashes($_SESSION['new_mail']);}
		?>"  data-validetta="required,email" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Notre site est ainsi fait que nous ne devrons normalement pas entrer en contact direct avec vous, mais sait-on jamais ? L'adresse e-mail indiquée ici est votre adresse e-mail personnelle, elle peut être différente de celle mentionnée ci-dessus. C'est l'adresse à laquelle nous vous enverrons les mails de confirmation."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">jp.dutrieux@archi-pol-tence.be</p>
    </div>
 </div>
  <div class="form-group">
    <label for="site" class="col-sm-3 control-label">Etes-vous affilié à une association/fédération<br/>professionnelle ? Tapez alors son nom ici</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="association" name="association" value="<?php echo $_POST['association']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Inscrivez le nom de votre association professionnelle"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Fédération belge des entrepreneurs paysagistes</p>
    </div>
 </div>
 
  <h1>Coordonnées pour la facturation</h1>
  <div class="form-group">
    <label for="facturation_nom" class="col-sm-3 control-label">Dénomination officielle de votre société</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_nom" name="facturation_nom" value="<?php echo $_POST['facturation_nom']; ?>"  data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici la dénomination officielle de la société qui recevra notre facture."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">APPT</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="facturation_juridique" class="col-sm-3 control-label">Forme juridique</label>
    <div class="col-xs-4">
      <select class="form-control" name="facturation_juridique" id="facturation_juridique">
      		<option>-</option>
            <option <?php if($_POST['facturation_juridique'] =='Personne physique') { echo 'selected'; } ?> value="Personne physique">Personne physique</option>
            <option <?php if($_POST['facturation_juridique'] =='Société anonyme (SA)') { echo 'selected'; } ?> value="Société anonyme (SA)">Société anonyme (SA)</option>
            <option <?php if($_POST['facturation_juridique'] =='Société privée à responsabilité limitée (SPRL)') { echo 'selected'; } ?> value="Société privée à responsabilité limitée (SPRL)">Société privée à responsabilité limitée (SPRL)</option>
            <option <?php if($_POST['facturation_juridique'] =='Société privée à responsabilité limitée d\'une personne (SPRLU)') { echo 'selected'; } ?> value="Société privée à responsabilité limitée d'une personne (SPRLU)">Société privée à responsabilité limitée d'une personne (SPRLU)</option>
            <option <?php if($_POST['facturation_juridique'] =='Société coopérative à responsabilité illimitée (SCRI)') { echo 'selected'; } ?> value="Société coopérative à responsabilité illimitée (SCRI)">Société coopérative à responsabilité illimitée (SCRI)</option>
            <option <?php if($_POST['facturation_juridique'] =='Société coopérative à responsabilité limitée (SCRL)') { echo 'selected'; } ?> value="Société coopérative à responsabilité limitée (SCRL)">Société coopérative à responsabilité limitée (SCRL)</option>
            <option <?php if($_POST['facturation_juridique'] =='Société en commandite par actions') { echo 'selected'; } ?> value="Société en commandite par actions">Société en commandite par actions</option>
            <option <?php if($_POST['facturation_juridique'] =='Société en commandite simple') { echo 'selected'; } ?> value="Société en commandite simple">Société en commandite simple</option>
            <option <?php if($_POST['facturation_juridique'] =='Société en nom collectif') { echo 'selected'; } ?> value="Société en nom collectif">Société en nom collectif</option>
        </select>
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Choisissez dans la liste déroulante."><img src="../img/question.png" alt="info"></button>
    </div> 
 </div> 
 
  <div class="form-group">
    <label for="facturation_adresse" class="col-sm-3 control-label">Adresse (Rue, Avenue,...)<br/>et numéro de rue (+ boîte éventuelle)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_adresse" name="facturation_adresse" value="<?php echo $_POST['facturation_adresse']; ?>"  data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez l'adresse de votre siège social en toutes lettres, sans abréviations, en utilisant les majuscules et minuscules quand elles sont nécessaires."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Rue des Iguanodons 35</p>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_cp" class="col-sm-3 control-label">Code Postal</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_cp" name="facturation_cp" value="<?php echo $_POST['facturation_cp']; ?>"  data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez les 4 chiffres de votre code postal"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">1360</p>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_localite" class="col-sm-3 control-label">Localité</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_localite" name="facturation_localite" value="<?php echo $_POST['facturation_localite']; ?>"  data-validetta="required" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Thorembais-Saint-Trond</p>
    </div>
 </div> 
  <div class="form-group">
    <label for="facturation_tva" class="col-sm-3 control-label">Numéro de TVA</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_tva" name="facturation_tva" value="<?php echo $_POST['facturation_tva']; ?>"  data-validetta="required" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez votre numéro de TVA sous la forme suivante : les lettres BE, puis un espace, un zéro et 3 chiffres, un point et trois chiffres, un point et trois chiffres."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">BE 0123.456.789</p>
    </div>
 </div> 
  <div class="form-group">
    <label for="num_enregistrement" class="col-sm-3 control-label">Si vous êtes un entrepreneur agréé,<br/>encodez votre numéro d'enregistrement</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="num_enregistrement" name="num_enregistrement" value="<?php echo $_POST['num_enregistrement']; ?>" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez votre numéro d'enregistrement"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">24.18.16</p>
    </div>
 </div> 
  <div class="form-group"> 
   <div class="col-sm-3">
      <input type="checkbox" <?php if($_POST['conditions'] == 'oui' || $_POST['conditions'] == 'ja' ) { echo 'checked = "checked"'; } ?> id="conditions" name="conditions" value="oui" data-validetta="required" >
    </div>   
    <label for="conditions" class="col-xs-4 control-label text-left">J'ai bien lu vos <a href="pdf/conditions_generales.pdf" target="_blank" style="color:#0033ff;"><u>conditions générales</u></a> et je les accepte.</label>
    
    <div class="col-xs-1">
      <button type='button' tabindex='-1' class='toolbut' data-toggle='tooltip' data-placement='top' title='Ouvrez le lien en cliquant sur "conditions générales", lisez-les bien attentivement et cochez cette case pour confirmer que vous les acceptez.'><img src="../img/question.png" alt="info"></button>
    </div> 
 </div> 
 
  <div class="form-group"> 
  <div class="col-sm-3">
      <input type="checkbox" <?php if($_POST['confirmation'] == 'oui' || $_POST['confirmation'] == 'ja' ) { echo 'checked = "checked"'; } ?> id="confirmation" name="confirmation" value="oui" data-validetta="required" >
    </div>    
    <label for="confirmation" class="col-xs-4 control-label  text-left">En cochant cette case, j'accepte que l'éditeur me facture<br/>la somme de 90 € hors tva lors de la parution de l'ebook<br/>et je m'engage à payer cette facture au grand comptant.</label>
   
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Cochez cette case pour confirmer votre inscription."><img src="../img/question.png" alt="info"></button>
    </div> 
 </div> 
  <?php if (!$_SESSION['user']){  ?>
 <div class="form-group">
            <label for="statut" class="col-xs-4 control-label">Captcha</label>
            <div class="col-xs-6">                
            
           <?php dsp_crypt(0,1); ?>

             
            </div>
          </div>
          
                              
                       
 <div class="form-group">
            <label for="statut" class="col-xs-4 control-label">Recopiez le captcha</label>
            <div class="col-xs-6">                
            
            
            <input type="text" name="code"  data-validetta="required">
             
            </div>
          </div>
          <?php } ?>
 
  
<div class="form-group">
    <div class="col-xs-offset-3 col-xs-10">
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="verif" class="btn btn-default btn-lg btn-blue">Vérifier</button>
    </div>
  </div>

  
</form>
