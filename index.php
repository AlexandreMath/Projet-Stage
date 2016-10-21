<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil</title>
	<meta charset='utf-8'/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />
	<script src="script/jquery-2.1.4.js"></script>
</head>
<body>

	<!--le header-->
	<header>
		<?php if(isset($_SESSION['Auth']['login'])){
				include('privateMenu.php');}
			  else{include('header.php');}
			?>
	</header>

	<div id="mapGoogle">
		<img src="img/map.png" >
	</div>
	<!--section principale qui contient les derniers ajouts de terrains + sidebare-->
	<section id='main'>
		<div class="container">
			<div class="row">
				<div id="search" class="col-md-12">
					<?php include('searchTerrain.php'); ?>
				</div>
				<!--section sidebare -->
				<div id="side_bare" class="col-md-4">
					<?php include ('sidebare.php'); ?>
				</div>
				<!-- la section principale de la page avec les terrains -->
				<div id="contents" class="col-md-8">
					<?php include ('contents.php'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--le footer-->
	<footer>
		<?php include ('footer.php'); ?>
	</footer>

</body>
</html>