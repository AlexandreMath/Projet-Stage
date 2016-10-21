<?php
session_start();
require('../model/Database.inc.php');

//création de l'objet DB
$database = new Database();


//Verifie qu'il y a au moins une valeur rentré par l'utilisateur. 
if(!empty($_POST['adresse']) || !empty($_POST['codePostal']) || !empty($_POST['ville']) || !empty($_POST['minprix']) || !empty($_POST['maxprix'])){
	$adresse = htmlentities($_POST['adresse']);
	$codePostal = htmlentities($_POST['codePostal']);
	$ville = htmlentities($_POST['ville']);
	$minprix = htmlentities($_POST['minprix']);
	$maxprix = htmlentities($_POST['maxprix']);




	$sql = 'SELECT * FROM terrains WHERE 1=1';
	if (!empty($adresse)) {
		$sql .= ' AND rue ='."'$adresse'";
	}
		
	if (!empty($codePostal)) {		
		$sql .= " AND codePostal ="."'$codePostal'";
	}
	
	if (!empty($ville)) {		
		$sql .= " AND ville ="."'$ville'";
	}
	
	if (!empty($minprix)) {		
		$sql .= " AND prix >="."'$minprix'";
	}
	
	if (!empty($maxprix)) {		
		$sql .= " AND prix <="."'$maxprix'";
	}
	$resReq = $database->loadTerrainBySearch($sql);
	if ($resReq){
		$_SESSION['ResultSearch'] = $resReq;
		header("location: ../index.php");	
	}

}
else{
	echo 'Auncune donnée n\'été rentré';
}

?>