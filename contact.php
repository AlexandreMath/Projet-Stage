<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Espace Membre </title>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />
	<!-- script -->
	<script src="script/jquery-2.1.4.js"></script>
	<script src="script/ContactError.js"></script>
</head>
<body>
	<header>
		<?php include('header.php'); ?>
	</header>
	<div class="container">
		<div class="row">
			<h1>Formulaire de Contact</h1>
			<div class="col-md-6">
			<form class="form-horizontal" action="controller/ControlContact.php" method="post">

				<div class="form-group">
					<span class="erreur-message"></span>
					<label for="nom">Votre Nom</label>
					<input type='text' class='form-control' name='nom' id="nom">
				</div>

				<div class="form-group">
					<span class="erreur-message"></span>
					<label for="email">Votre adresse mail</label>
					<input type="text" class="form-control" name="email" id="email">
				</div>

				<div class="form-group">
					<span class="erreur-message"></span>
					<label for="message">Votre message</label>
					<textarea class="form-control" name="message" id="message"></textarea>
				</div>
				<button type="submit" class="btn btn-default" id="envoyer">Envoyer</button>
			</form>
			</div>
		</div>
	</div>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>
