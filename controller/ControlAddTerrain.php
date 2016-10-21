<?php
session_start();
require '../model/Database.inc.php';
require '../model/Terrain.inc.php';

if(!empty($_POST['login'])){
	if(!empty($_POST['prix']) && !empty($_POST['adresse']) && !empty($_POST['detail']) && !empty($_POST['description'])){
		

		$login = htmlentities($_POST['login']);
		$prix = htmlentities($_POST['prix']);
		$rue = htmlentities($_POST['us5-street1']);
		$codePostal = htmlentities($_POST['us5-zip']);
		$ville = htmlentities($_POST['us5-city']);
		$detail = htmlentities($_POST['detail']);
		$description = htmlentities($_POST['description']);

		$longitude = htmlentities($_POST["us3-lon"]);
		$latitude = htmlentities($_POST["us3-lat"]);
		//sauvegarde dans des variables de session de la longitude et de la latitude
		$_SESSION['longitude'] = $longitude;
		$_SESSION['latitude'] = $latitude;
		

		$dateAjout =date("d/m/y");  

		//Création de l'objet terrain
		$terrain = new Terrain($login, $prix, $rue, $codePostal, $ville, $detail, $description, $longitude, $latitude, $dateAjout);

		//Connexion à la DB
		$database = new Database();
		
		//l'objet terrain est envoyé vers la DB
		if($database->addTerrain($terrain)){
			echo 'terrain ajout&eacute';

		}
		else{
			echo 'Le terrain n\'a pas &eacutet&eacute ajout&eacute';
		}
	
	}
	else{
		echo "il manque des informations";
	}
}
else{
	echo 'Vous devez vous connecter pour pouvoir ajouter un terrain!';
}
?>