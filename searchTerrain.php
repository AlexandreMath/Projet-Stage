<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" >
</head>
<body>
<br>
<form class="form-inline" action="controller/ControlSearchTerrain.php" method="post">
	<div class="form-group">
		<label for="Ville">Adresse</label>
   		<input type="text" class="form-control" id="adresse" name="adresse" >
	</div>
	<div class="form-group">
		<label for="Ville">Ville</label>
   		<input type="text" class="form-control" id="ville" name="ville" >
	</div>
	<div class="form-group">
		<label for="codePostal">Code Postal</label>
   		<input type="text" class="form-control" id="codePostal" name="codePostal" >
	</div>
	<div class="form-group">
		<label for="prix">Prix entre</label>
   		<input type="text" class="form-control" id="prix" name="minprix" >
   		<label for="prix">et</label>
   		<input type="text" class="form-control" id="prix" name="maxprix" >
	</div>
	<button type="submit" id="envoyer" class="btn btn-default">Envoyer</button>
</form>
<br>
</body>
</html>