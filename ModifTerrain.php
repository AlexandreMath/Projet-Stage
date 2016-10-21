<?php
session_start();
require ('model/Database.inc.php');

$idTerrain = $_GET['id'];

$database = new Database();
$res = $database->loadTerrainById($idTerrain);
//var_dump($res);

if($res){

}
else{
	header('location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modification Terrain</title>
	<meta charset='UTF-8'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
</head>
<body>
	<header>
		<?php include('privateMenu.php');?>
	</header>
	<div class="container">
	 	<div class="row">
	 		<div class="col-xs-12">
	 		<h2>Modification d'un Terrain</h2>
	 			<form action="controller/ControlModifTerrain.php" method="post">
	 			<div class="form-group">
		 				<input type="hidden" class="form-control" name="idTerrain" value="<?php echo $idTerrain;?>" >
	 				</div>
	 				<div class="form-group">
		 				<label for="Prix">Prix</label>
		 				<input type="text" class="form-control" name="prix" value="<?php echo $res[0]['prix'];?>" >
	 				</div>
					<div class="form-group">
						<label for="Adresse">Adresse</label>
						<input type="text" class="form-control" name="adresse" value="<?php echo $res[0]['rue'];?>" >
					</div>
					<div class="form-group">
						<label for="codePostal">Code postal</label>
						<input type="text" class="form-control" name="codePostal" value="<?php echo $res[0]['codePostal'];?>" >
					</div>
					<div class="form-group">
						<label for="codePostal">Ville</label>
						<input type="text" class="form-control" name="ville" value="<?php echo $res[0]['ville'];?>" >
					</div>
					<div class="form-group">
						<label for="Detail">Detail</label>
						<input type="text" class="form-control" name="detail" value="<?php echo $res[0]['detail'];?>" >
					</div>
					<div class="form-group">
						<label for="Description">Description</label>
						<input type="text" class="form-control" name="description" value="<?php echo $res[0]['description']; ?>" >
					</div>
					<button type="submit" id="envoyer" class="btn btn-default">Envoyer</button>
	 			</form>
	 			<a href="mesTerrains.php" class="btn btn-default btn-sm" role="button">Retour</a>
	 		</div>
	 	</div>
	</div>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>