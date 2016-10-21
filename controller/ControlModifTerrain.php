<?php
require ('../model/Database.inc.php');

if (!empty($_POST['prix']) && !empty($_POST['adresse']) && !empty($_POST['codePostal']) && !empty($_POST['detail']) && !empty($_POST['ville']) && !empty($_POST['description'])){
	$database = new Database();

	$prix = htmlentities($_POST['prix']);
	$adresse = htmlentities($_POST['adresse']);
	$codePostal = htmlentities($_POST['codePostal']);
	$ville = htmlentities($_POST['ville']);
	$detail = htmlentities($_POST['detail']);
	$description = htmlentities($_POST['description']);
	$idTerrain = htmlentities($_POST['idTerrain']);


	if ($database->updateTerrain($prix, $adresse, $codePostal,$ville, $detail, $description, $idTerrain)){
		echo "Modification réussite";
	}
	else{
		echo "Echec de la modification";
	}
}
else{
	echo "Données manquantes";
}
?>