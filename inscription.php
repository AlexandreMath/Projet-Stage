<?php
session_start();
$cryptinstall="form/cryptographp.fct.php";
include $cryptinstall; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Incription</title>
	<meta charset='UTF-8' />
	<!--Style-->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />
	<!--Script-->
	<script src="script/jquery-2.1.4.js"></script>
	<script src="script/verifInscription.js"></script>
</head>
<body>
<header>
	<?php include('header.php');?>
</header>
<section id='main'>
<div class="container">
	<h2>Inscription</h2>
	<div class="col-md-12">
	<p id="message"><p/><br />
		<form id="formInscrip" action="controller/validationInscription.php" method="post">
			
			<div class="form-group"><span class="error-message"></span>
				<label class="radio-inline">
		 		<input type="radio"  id="Mme" name="gender" value="Mme" > Mme
				</label>

				<label class="radio-inline">
		  		<input type="radio" id="M." name="gender" value="M." > M.
				</label>
			</div>
			<div class="form-group">
		    	<label for="login">Votre login</label><span class="error-message"></span>
		    	<input type="text" class="form-control" id="login" name="login" value="<?php echo $_SESSION['inscription']['login']; ?>">
		  	</div>

		  	<div class="form-group">
	    		<label for="password">Votre mot de passe</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="password1" name="password1" value="<?php echo $_SESSION['inscription']['password1']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="confirmPassword">Confirmez votre mot de passe</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="confirmPassword" name="confirmPassword" value="<?php echo $_SESSION['inscription']['confirmPassword']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="email">Votre adresse mail</label><span class="error-message"></span>
	    		<input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['inscription']['email']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="telephone">Votre num&eacutero de t&eacutel&eacutephone</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_SESSION['inscription']['phone']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="fax">Votre fax</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="fax" name="fax" value="<?php echo $_SESSION['inscription']['fax']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="adresse">Adresse (rue, num&eacutero)</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $_SESSION['inscription']['adresse']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="codePostal">Code postal</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="codePostal" name="codePostal" value="<?php echo $_SESSION['inscription']['codePostal']; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="Localite"> Localit&eacute</label><span class="error-message"></span>
	    		<input type="text" class="form-control" id="localite" name="localite" value="<?php echo $_SESSION['inscription']['localite']; ?>">
	  		</div>

	  		<div class="form-group">
			<h4>Professionnel</h4>

				<label class="radio-inline">
		 		<input type="radio" id="professionnel" name="Professionel"  value="Prof"> Oui
				</label>

				<label class="radio-inline">
		  		<input type="radio" id="nonProfessionnel" name="Professionel" value="NonProf"> Non
				</label>

	  		</div>
	  		<!-- Formulaire d'inscription pour professionnel - société-->
			<div id="prof">
				<div class="col-md-12">
					<h2>Formulaire pour professionnel</h2>
						<div class="form-group">
					    	<label for="entreprise">Nom de l'entreprise</label>
					    	<input type="text" class="form-control" id="entreprise" name="entreprise" value="<?php echo $_SESSION['inscription']['entreprise']; ?>">
					  	</div>

					  	<div class="form-group">
					    	<label for="fonction">Fonction dans la soci&eacutet&eacute</label>
					    	<input type="text" class="form-control" id="fonction" name="fonction" value="<?php echo $_SESSION['inscription']['fonction']; ?>">
					  	</div>

					  	<div class="form-group">
					    	<label for="site">Site internet &eacuteventuel</label>
					    	<input type="text" class="form-control" id="site" name="site" value="<?php echo $_SESSION['inscription']['site']; ?>">
					  	</div>

					<div class="form-group">
			    		<label for="adresseProf">Adresse (rue, num&eacutero)</label>
			    		<input type="text" class="form-control" id="adresseProf" name="adresseProf" value="<?php echo $_SESSION['inscription']['adresseProf']; ?>">
			  		</div>

			  		<div class="form-group">
			    		<label for="codePostalProf">Code postal</label>
			    		<input type="text" class="form-control" id="codePostalProf" name="codePostalProf" value="<?php echo $_SESSION['inscription']['codePostalProf']; ?>">
			  		</div>

			  		<div class="form-group">
			    		<label for="localiteProf"> Localit&eacute</label>
			    		<input type="text" class="form-control" id="localiteProf" name="localiteProf" value="<?php echo $_SESSION['inscription']['localiteProf']; ?>">
			  		</div>

					<div class="form-group">
					   	<label for="tva">Num&eacutero de TVA</label>
					    <input type="text" class="form-control" id="tva" name="tva" value="<?php echo $_SESSION['inscription']['tva']; ?>">
					</div>
				</div>
			</div>
			<br />
			<!--Captcha-->
			<div id="captcha" >
				<div class="form-group">
				&nbsp;
		            <label for="statut" class="control-label">Captcha</label>
		            <div id='statut'style="float:left;">
	           			<?php dsp_crypt(0,1); ?>
	          		</div>
	          	</div>
              
	 			<div class="form-group">
		            <label for="statut" class="control-label">Recopiez le captcha</label> 
	            	<input type="text" name="code"  data-validetta="required">
	          	</div>
	        </div>
	          	<br>

	        <div class="form-group">
	  		 	<input type="checkbox"  id="conditions" name="conditions" value="oui" data-validetta="required" >
	  			<label for="conditions" >J'ai bien lu vos <a href="#" target="_blank" style="color:#0033ff;"><u>conditions générales</u></a> et je les accepte.</label>	
	  		</div>
	          	<!--submit-->
	          	<div class="form-group">
					<button type="submit" id="envoyer" class="btn btn-default">V&eacuterifier</button>
				</div>
		</form>
		
	</div>

</div>
</section>
<footer>
	<?php include('footer.php'); ?>
</footer>
<script type="text/javascript">
$(function() {
	$("#prof").hide();

	$("#professionnel").click(function(){
		$("#prof").toggle();
	});
	$("#nonProfessionnel").click(function(){
		$("#prof").hide();
	});

});
</script>
</body>
</html>