<?php
session_start();
require ('model/Database.inc.php');
//
$database = new Database();
$idUser = $_SESSION['Auth']['id_user'];

$DonnerUser = $database->loadUser($idUser);

if($DonnerUser){
	$adresse = html_entity_decode($DonnerUser[0]->adresse);
	$localite = html_entity_decode($DonnerUser[0]->localite);

	$adresseProf = html_entity_decode($DonnerUser[0]->adresseProf);
	$localiteProf = html_entity_decode($DonnerUser[0]->localiteProf);
}
else{
	return "Erreur";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Espace Membre </title>
	<meta charset='UTF-8' />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />
</head>
<body>
	<header>
		<?php include('privateMenu.php');?>
	</header>
	<div class="container">	
	<h2>Gérer vos données de connexion</h2>
		<div class="col-md-6">
			<form action="controller/ControlMonCompte.php" method="post">

				<div class="form-group">
	    			<label for="login">Votre login</label>
	    			<input type="text" class="form-control" id="login" name="login" value="<?php echo $DonnerUser[0]->user; ?>">
	  			</div>

	  			<div class="form-group">
	    			<label for="password">Votre mot de passe</label>
	    			<input type="text" class="form-control" id="password" name="password" value="<?php echo $DonnerUser[0]->password; ?>">
	  			</div>

	  			<div class="form-group">
	    			<label for="email">Votre adresse mail</label>
	    			<input type="email" class="form-control" id="email" name="email" value="<?php echo $DonnerUser[0]->mail; ?>">
	  			</div>

	  			<div class="form-group">
	    		<label for="telephone">Votre num&eacutero de t&eacutel&eacutephone</label>
	    		<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $DonnerUser[0]->phone; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="fax">Votre fax</label>
	    		<input type="text" class="form-control" id="fax" name="fax" value="<?php echo $DonnerUser[0]->fax; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="adresse">Adresse (rue, num&eacutero)</label>
	    		<input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $adresse; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="codePostal">Code postal</label>
	    		<input type="text" class="form-control" id="codePostal" name="codePostal" value="<?php echo $DonnerUser[0]->codePostal; ?>">
	  		</div>

	  		<div class="form-group">
	    		<label for="Localite"> Localit&eacute</label>
	    		<input type="text" class="form-control" id="localite" name="localite" value="<?php echo $localite; ?>">
	  		</div>
	  		<?php if($DonnerUser[0]->professionnel == true){?>
	  			<div class="col-md-12">
					<h2>Formulaire pour professionnel</h2>
						<div class="form-group">
					    	<label for="entreprise">Nom de l'entreprise</label>
					    	<input type="text" class="form-control" id="entreprise" name="entreprise" value="<?php echo $DonnerUser[0]->entreprise; ?>">
					  	</div>

					  	<div class="form-group">
					    	<label for="fonction">Fonction dans la soci&eacutet&eacute</label>
					    	<input type="text" class="form-control" id="fonction" name="fonction" value="<?php echo $DonnerUser[0]->fonction; ?>">
					  	</div>

					  	<div class="form-group">
					    	<label for="site">Site internet &eacuteventuel</label>
					    	<input type="text" class="form-control" id="site" name="site" value="<?php echo $DonnerUser[0]->site; ?>">
					  	</div>

					<div class="form-group">
			    		<label for="adresseProf">Adresse (rue, num&eacutero)</label>
			    		<input type="text" class="form-control" id="adresseProf" name="adresseProf" value="<?php echo $adresseProf; ?>">
			  		</div>

			  		<div class="form-group">
			    		<label for="codePostalProf">Code postal</label>
			    		<input type="text" class="form-control" id="codePostalProf" name="codePostalProf" value="<?php echo $DonnerUser[0]->codePostalProf; ?>">
			  		</div>

			  		<div class="form-group">
			    		<label for="localiteProf"> Localit&eacute</label>
			    		<input type="text" class="form-control" id="localiteProf" name="localiteProf" value="<?php echo $localiteProf; ?>">
			  		</div>

					<div class="form-group">
					   	<label for="tva">Num&eacutero de TVA</label>
					    <input type="text" class="form-control" id="tva" name="tva" value="<?php echo $DonnerUser[0]->tva; ?>">
					</div>
				</div>	  			
	  		<?php } ?>
	  			<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>