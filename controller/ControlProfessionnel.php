<?php
require ('../model/Database.inc.php');


$database = new Database();

if(!empty($_POST['entreprise']) && !empty($_POST['fonction']) && !empty($_POST['tva'])) {
	
	$entreprise = htmlentities($_POST['entreprise']);
	$fonction = htmlentities($_POST['fonction']);
	$tva = htmlentities($_POST['tva']);
	$adresse = htmlentities($_POST['adresse']);
	$codePostal = htmlentities($_POST['codePostal']);
	$localite = htmlentities($_POST['localite']);

	//Si la super variable $_POST['site'] est vide, on assigne à la variable site une chaine de caractere.
	if(empty($_POST['site'])){
		$site = 'Aucun site internet';
	}
	else{
		$site = htmlentities($_POST['site']);
	}
	//Inscription dans la DB
	if(){

	}
	else{
		echo 'Echec de l\'inscription!';
	}
}

else{
	echo 'donn&eacute manqante';
}
?>