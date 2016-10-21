<?php
session_start();
require ('../model/Database.inc.php');
require ('../model/Terrain.inc.php');

$idUser = $_SESSION['Auth']['id_user'];

$database = new Database();

$res = $database->loadTerrainByProprietaire($idUser);

if($res){
	$longitude = $res[0]['longitude'];
	$latitude = $res[0]['latitude'];
	//var_dump($longitude, $latitude);

	$idTerrain = $database->loadIdTerrain($longitude, $latitude);
	//var_dump($idTerrain);

	$src = $database->loadImagePrincipal($idTerrain);
	//var_dump($src);
	echo '<img src="'.$src.'" class="img-thumbnail">' ;
}
else{
	throw new Exception("Erreur! Echec du chargement de la DB.");
}
?>