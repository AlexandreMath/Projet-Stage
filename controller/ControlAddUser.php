<?php
session_start();

require ('../model/Database.inc.php');
require ('../model/User.inc.php');
require ('../model/MessageModel.inc.php');

$database = new Database();
$model = new MessageModel();

//Verification que les variables envoyées avec la méthode POST ne sont pas vide et 
if(isset($_SESSION['inscription'])){
	$gender = htmlentities($_SESSION['inscription']['gender']);
	$login = htmlentities($_SESSION['inscription']['login']);
	$email = htmlentities($_SESSION['inscription']['email']);
	$phone = htmlentities($_SESSION['inscription']['phone']);
	$fax  = htmlentities($_SESSION['inscription']['fax']);
	$adresse = htmlentities($_SESSION['inscription']['adresse'],ENT_QUOTES);
	$codePostal = htmlentities($_SESSION['inscription']['codePostal']);
	$localite = htmlentities($_SESSION['inscription']['localite'],ENT_QUOTES);

	if($_SESSION['inscription']['password1'] === $_SESSION['inscription']['confirmPassword']){
		$password = htmlentities($_SESSION['inscription']['password1']);
		
		//var_dump($_POST['Professionel']);
		//Verification du formulaire professionnel
		if($_SESSION['inscription']['Professionel'] == 'Prof'){
			$professionel = true;
			$entreprise = htmlentities($_SESSION['inscription']['entreprise']);
			$fonction = htmlentities($_SESSION['inscription']['fonction']);
			$tva = htmlentities($_SESSION['inscription']['tva']);
			$adresseProf = htmlentities($_SESSION['inscription']['adresseProf'],ENT_QUOTES);
			$codePostalProf = htmlentities($_SESSION['inscription']['codePostalProf']);
			$localiteProf = htmlentities($_SESSION['inscription']['localiteProf'],ENT_QUOTES);
			$site = htmlentities($_SESSION['inscription']['site']);

		}
		//Si l'utilisateur n'est pas un professionnel, on déclare les variable à des chaines vide.
		else{
			$professionel = false;
			$entreprise = "";
			$fonction = "";
			$tva = "";
			$adresseProf = "";
			$codePostalProf = "";
			$localiteProf = "";
			$site = "";
		}	
		//Création de l'objet user
		$utilisateur = new User($gender,$login, $password, $email, $phone, $fax, $adresse, $codePostal, $localite, $professionel, $entreprise, $fonction, $tva, $adresseProf, $codePostalProf, $localiteProf);

		//Envoye des données vers la DB
		/*$res = $database->addUser($utilisateur);
		var_dump($res);
		*/
		if($database->addUser($utilisateur)){
			echo 'Isncription r&eacuteussi!';
		}
		else{
			$message = 'D&eacutesol&eacute, nous n\'avons pas pu vous inscrire.';
			$model->setMessage($message);
			header("location: ../message.php");
		}

	}				
	else{
		$message = 'Les mots de passes ne correspondent pas!';
		$model->setMessage($message);
		header("location: ../message.php");
	}
}
else{
		$message = 'Donnée manquante';
		$model->setMessage($message);
		header("location: ../message.php");
}
?>