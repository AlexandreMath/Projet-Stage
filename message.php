<?php
session_start();
require ("model/MessageModel.inc.php");
$message = new MessageModel();
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
		<?php if($_SESSION['Auth']['login']){
				include('privateMenu.php');}
			  else{include('header.php');}
			?>
	</header>

	<div id="mapGoogle">
		<img src="img/map.png" >
	</div>
	<!--section principale qui contient les derniers ajouts de terrains + sidebare-->
	<section id='main'>
	<!--section sidebare -->
		<div class="container">
		<!-- la section principale qui affichee le message-->
			<div class="col-md-12">
				<p><?php echo $message->getMessage(); ?></p>
			</div>
		</div>
	</section>
	<!--le footer-->
	<footer>
		<?php include ('footer.php'); ?>
	</footer>

</body>
</html>