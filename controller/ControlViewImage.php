<?php
session_start();
require ('../model/Database.inc.php');

$connection = new Database();

$idTerrain = 2;

$sql = "SELECT * FROM imagesTerrain WHERE idTerrain = '$idTerrain'";
var_dump($sql);
try{ 
	$resultat = $connection->prepare($sql);
	$resultat->execute();
	$count = $resultat->rowCount();
	$objres = $resultat-> fetchAll(PDO::FETCH_OBJ); 
}
catch(PDOException $ex){
	throw new Exception($ex);
}
$connection = NULL;
//Si l'excution de la requete est réussie, on récupère l'objet qui y est retourné et on y extrait le contenu.

$html='';

for($i=0; $i< $count; $i++){
	$html ='<img src='.$objres[$i]->src.'>';
}
echo $html;
?>