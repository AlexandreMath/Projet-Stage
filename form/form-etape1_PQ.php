<form id="form" class="form-horizontal valid-me" action="etape1.php" method="post" role="form">
	
	
        <input type="hidden" name="id_user" id="id_user" value="<?php 
		if($_GET['id_user']){$_POST['id_user'] = addslashes($_GET['id_user']);echo addslashes($_GET['id_user']);}else{$_POST['id_user'] = 'J-'.$_SESSION['user'];echo 'J-'.$_SESSION['user'];};
		?>"> 
        <input type="hidden" name="id_class" id="id_class" value="<?php 
		if($_GET['id_class']){$_POST['id_class'] = addslashes($_GET['id_class']);echo addslashes($_GET['id_class']);}else{echo $_SESSION['id_class'];};
		?>"> 
        
        <input type="hidden" name="langue_user" id="langue_user" value="<?php 
		$_POST['langue_user'] = $_SESSION['lang']; echo $_POST['langue_user'];
		?>"> 
        
        
     <div class="form-group">
      <label for="votreemail" class="col-sm-3 control-label">Encodez votre adresse e-mail</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="mylogin" id="mylogin" data-validetta="required,email" value="<?php 
		if(!$_GET['mylogin']){echo $_POST['mylogin'];}
		else{$_POST['mylogin'] = addslashes($_GET['mylogin']);echo addslashes($_GET['mylogin']);}
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
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Architecture Company</p>
    </div>
 </div>
    
  <div class="form-group">
    <label for="collaborateurs" class="col-sm-3 control-label">Prénom(s) et nom(s) du ou des dirigeants <br/> et/ou du ou des collaborateurs éventuels</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="collaborateurs" name="collaborateurs" value="<?php echo $_POST['collaborateurs']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Inscrivez les noms et prénoms ddes dirigeants et/ou collaborateurs éventuels, dans l'ordre désiré. Séparez-les par un virgule, sauf entre l'avant-dernier et le dernier, que vous séparez par une esperluette (&). Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Van Keerberegn Paul, Boulangier Claudine & Dutrieux Jean-Pierre</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="adresse" class="col-sm-3 control-label">Adresse (Rue, Avenue,…)<br/>et numéro de rue (+ boîte éventuelle)</label>
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
 
 
  
  
  <div class="form-group">
    <label for="tel1" class="col-sm-3 control-label">Téléphone # 01 (ligne fixe ou gsm)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="tel1" name="tel1" value="<?php echo $_POST['tel1']; ?>" data-validetta="required" >
    </div>
   
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre téléphone d'abord avec les chiffres du préfixe puis, après la barre oblique, les groupes de chiffres séparés par un point. Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international. Si vous ne disposez que d'une ligne Gsm, tappez-la ici et non dans le champ Gsm qui suit. "><img src="../img/question.png" alt="info"></button>
    </div>
     <div class="col-xs-4">
      <p class="help-block">081/20.42.58</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="tel2" class="col-sm-3 control-label">Téléphone # 02 éventuel (ligne fixe ou gsm)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="tel2" name="tel2" value="<?php echo $_POST['tel2']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez ici votre deuxième (éventuelle) ligne fixe d'abord avec les chiffres du préfixe puis, après la barre oblique, les groupes de chiffres séparés par un point. Merci d'encoder ce numéro dans sa forme nationale et pas avec le préfixe international."><img src="../img/question.png" alt="info"></button>
    </div>
    
    <div class="col-xs-4">
      <p class="help-block">081/20.42.58</p>
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
      <input type="text" class="form-control" id="mailoffice" name="mailoffice" value="<?php echo $_POST['mailoffice']; ?>" data-validetta="required,email" >
    </div>
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez l'adresse e-mail que vous souhaitez voir reproduite dans l'ebook. "><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">info@architecturecompany.be</p>
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
      <p class="help-block">www.architecturecompany.be</p>
    </div>
 </div>
 
  <div class="form-group">    
    <div class="col-sm-3"></div>
    <div class="col-xs-4">
     <a href="#">Cliquez ici si vous n'avez pas de site internet</a>
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
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez l'adresse de votre site internet en commençant par www. Ou, s'il ne comporte pas de www, par http://."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">www.monjardinsesabords.be/monjardin</p>
    </div>
 </div>
  
  
  
  
  <h1>Données de l'encodeur de ce formulaire</h1>
  
  <div class="form-group">
    <label for="nomuser" class="col-sm-3 control-label">Nom</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="nomuser" name="nomuser" value="<?php 
		if(!$_GET['nomuser']){echo $_POST['nomuser'];}
		else{$_POST['nomuser'] = addslashes($_GET['nomuser']);echo addslashes($_GET['nomuser']);}
		?>
        " data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Dutrieux</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="prenomuser" class="col-sm-3 control-label">Prénom</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="prenomuser" name="prenomuser" value="<?php 
		if(!$_GET['prenomuser']){echo $_POST['prenomuser'];}
		else{$_POST['prenomuser'] = addslashes($_GET['prenomuser']);echo addslashes($_GET['prenomuser']);}
		?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
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
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">gérant</p>
    </div>
 </div>
  
  
  <div class="form-group">
    <label for="teluser" class="col-sm-3 control-label">Numéro de téléphone ou gsm où l'on peut vous joindre le plus facilement</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="teluser" name="teluser" value="<?php echo $_POST['teluser']; ?>" data-validetta="required" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Notre site est ainsi fait que nous ne devrons normalement pas entrer en contact direct avec vous par téléphone, mais sait-on jamais ? Merci d'indiquer ici de préférence un numéro de Gsm."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">0485/426.781</p>
    </div>
 </div>
 
 <div class="form-group">
    <label for="mail_user" class="col-sm-3 control-label">Adresse e-mail personnelle</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="mail_user" name="mail_user" value="<?php echo $_POST['mail_user']; ?>" data-validetta="required,email" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Notre site est ainsi fait que nous ne devrons normalement pas entrer en contact direct avec vous, mais sait-on jamais ? L'adresse e-mail indiquée ici est votre adresse e-mail personnelle, elle peut être différente de celle mentionnée ci-dessus."><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">jp.dutrieux@architecturecompany.be</p>
    </div>
 </div>
  <div class="form-group">
    <label for="site" class="col-sm-3 control-label">Votre entreprise fait partie d'une association professionnelle ? Tapez alors son nom ici</label>
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
      <input type="text" class="form-control" id="facturation_nom" name="facturation_nom" value="<?php echo $_POST['facturation_nom']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Dénomination officielle"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Dénomination officielle</p>
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
 </div> 
 
  <div class="form-group">
    <label for="facturation_adresse" class="col-sm-3 control-label">Adresse (Rue, Avenue,...)<br/>et numéro de rue (+ boîte éventuelle)</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_adresse" name="facturation_adresse" value="<?php echo $_POST['facturation_adresse']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez l'adresse en toutes lettres, sans abréviations, en utilisant les majuscules et minuscules quand elles sont nécessaires"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Boulevard Sainte-Marguerite 125 A boîte 41</p>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_cp" class="col-sm-3 control-label">Code Postal</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_cp" name="facturation_cp" value="<?php echo $_POST['facturation_cp']; ?>" >
    </div>
    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Tapez les 4 chiffres de votre code postal"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">5310</p>
    </div>
 </div> 
 
  <div class="form-group">
    <label for="facturation_localite" class="col-sm-3 control-label">Localité</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_localite" name="facturation_localite" value="<?php echo $_POST['facturation_localite']; ?>" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Utilisez les majuscules et minuscules quand elles sont nécessaires, n'oubliez ni les accentuations ni les traits d'union"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">Laeken</p>
    </div>
 </div> 
  <div class="form-group">
    <label for="facturation_tva" class="col-sm-3 control-label">Numéro de TVA</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="facturation_tva" name="facturation_tva" value="<?php echo $_POST['facturation_tva']; ?>" >
    </div>    
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Encodez votre numéro de TVA"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block">TVA BE 0 123 456 789</p>
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
      <p class="help-block">...</p>
    </div>
 </div> 
  <div class="form-group"> 
   <div class="col-sm-3">
      <input type="checkbox" <?php if($_POST['conditions'] == 'oui') { echo 'checked = "checked"'; } ?> id="conditions" name="conditions" value="oui" data-validetta="required" >
    </div>   
    <label for="conditions" class="col-xs-4 control-label">J'ai pris connaissance des <a href="#">conditions générales</a> et je les accepte</label>
   
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Cocher pour accepter les conditions"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block"></p>
    </div>
 </div> 
 
  <div class="form-group"> 
  <div class="col-sm-3">
      <input type="checkbox" <?php if($_POST['confirmation'] == 'oui') { echo 'checked = "checked"'; } ?> id="confirmation" name="confirmation" value="oui" data-validetta="required" >
    </div>    
    <label for="confirmation" class="col-xs-4 control-label">En cochant cette case, j'accepte que l'éditeur me facture la somme de 100 € hors tva lors de la parution de l'ebook et je m'engage à payer cette facture au grand comptant.</label>
   
    <div class="col-xs-1">
      <button type="button" tabindex="-1" class="toolbut" data-toggle="tooltip" data-placement="top" title="Cocher pour confirmer votre inscription"><img src="../img/question.png" alt="info"></button>
    </div>
    <div class="col-xs-4">
      <p class="help-block"></p>
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
            
            
            <input type="text" name="code">
             
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
