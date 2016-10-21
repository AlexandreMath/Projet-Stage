<?php

require 'model/Database.inc.php';
$database = new Database();

if($_SESSION['ResultSearch']){
	$res = $_SESSION['ResultSearch'];
	//recherche du lien de l'image principale.
	$src = array();

	for ($i=0; $i <count($res); $i++) {
		$src[$i] = $database->loadImagePrincipal($res[$i]['id']);
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
		$html .= '<td>'.$res[$i]['DateAjout'].'</td></tr>';
		//$html .= '<td><a href="ModifTerrain.php?id='.$result[$i]['id'].'" class="btn btn-default btn-sm" role="button">Modifier</a></td></tr>';
	}
	//
	$_SESSION['ResultSearch'] = false;

}
else{
	$sql = "SELECT * FROM terrains ORDER BY dateAjout DESC";
	$result = $database->loadTerrainBySearch($sql);


	//recherche du lien de l'image principale.
	$src = array();

	for ($i=0; $i <count($result); $i++) {
		$src[$i] = $database->loadImagePrincipal($result[$i]->id);
	}

	$html ='';

	for ($i=0; $i < count($result); $i++) {
	 	$html .= '<tr><td><img src="'.$src[$i].'" class="img-thumbnail" style="width:100px; height:100px"></td>';
		$html .= '<td>'.$result[$i]->prix.'</td>';
		$html .= '<td>'.$result[$i]->rue.'</td>';
		$html .= '<td>'.$result[$i]->codePostal.'</td>';
		$html .= '<td>'.$result[$i]->ville.'</td>';
		$html .= '<td>'.$result[$i]->detail.'</td>';
		$html .= '<td>'.$result[$i]->description.'</td>';
		$html .= '<td>'.$result[$i]->DateAjout.'</td></tr>';
		//$html .= '<td><a href="ModifTerrain.php?id='.$result[$i]['id'].'" class="btn btn-default btn-sm" role="button">Modifier</a></td></tr>';
	}

}
?>
<table class="table table-striped">
	<?php echo $html; ?>
</table>
