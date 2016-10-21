<?php
session_start();
require ('model/Database.inc.php');
require ('model/Terrain.inc.php');
if($_SESSION['Auth']){

$idUser = $_SESSION['Auth']['id_user'];

$database = new Database();

$res = $database->loadTerrainByProprietaire($idUser);

if($res){

	//rechercher de la longitue et la latitude
	$longitude = array();
	$latitude = array();
	
	for ($i=0; $i <count($res); $i++) { 
		$longitude[$i] = $res[$i]['longitude'];
		$latitude[$i] = $res[$i]['latitude'];
	}

	//rechercher de l'id du terrain
	$idTerrain = array();	

	for ($i=0; $i < count($res); $i++) { 
		$idTerrain[$i] = $database->loadIdTerrain($longitude[$i], $latitude[$i]);
	}

	//recherche du lien de l'image principale.
	$src = array();

	for ($i=0; $i <count($res); $i++) { 
		$src[$i] = $database->loadImagePrincipal($idTerrain[$i]);
	}

	$html ='';
	
	for ($i=0; $i < count($res); $i++) {
	 	$html .= '<tr><td><img src="'.$src[$i].'" class="img-thumbnail" style="width:100px; height:100px"></td>';
		$html .= '<td>'.$res[$i]['prix'].'</td>';
		$html .= '<td>'.$res[$i]['rue'].'</td>';
		$html .= '<td>'.$res[$i]['codePostal'].'</td>';
		$html .= '<td>'.$res[$i]['ville'].'</td>';
		$html .= '<td>'.$res[$i]['detail'].'</td>';
		$html .= '<td>'.$res[$i]['description'].'</td>';
		$html .= '<td>'.$res[$i]['DateAjout'].'</td>';
		$html .= '<td><a href="ModifTerrain.php?id='.$res[$i]['id'].'" class="btn btn-default btn-sm" role="button">Modifier</a></td></tr>';
	}
	
}
else{
	throw new Exception("Erreur! Echec du chargement de la DB.");
}
}
else{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mes Terrains</title>
	<meta charset='UTF-8' >
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" >
</head>
<body>
	<header>
		<?php include('privateMenu.php');?>
	</header>
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Image Pricipale</th>
					<th>Prix</th>
					<th>Adresse</th>
					<th>Code Postal</th>
					<th>Ville</th>
					<th>Detail</th>
					<th>Description</th>
					<th>Mois</th>
				</tr>	
				</thead>
				<tbody>
					<?php echo $html; ?>
				</tbody>
			</table>
			<div class="image">
				<?php //echo $img; ?>
			</div>
		</div>
	  </div>
	</div>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>