<?php
session_start();
$gender = $_POST['gender'];
$prof = $_POST['Professionel'];
//variable de session qui contient les données envoyer par l'utilisateur
$_SESSION['inscription'] = array('gender' => $_POST['gender'],
									'login' => $_POST['login'], 
									'password1' => $_POST['password1'],
									'confirmPassword' => $_POST['confirmPassword'],
									'email' => $_POST['email'],
									'phone' => $_POST['phone'],
									'fax' => $_POST['fax'],
									'adresse' =>$_POST['adresse'],
									'codePostal' => $_POST['codePostal'],
									'localite' => $_POST['localite'],
									'Professionel' => $prof,
									'entreprise' => $_POST['entreprise'],
									'fonction' => $_POST['fonction'],
									'site' => $_POST['site'],
									'adresseProf' => $_POST['adresseProf'],
									'codePostalProf' => $_POST['codePostalProf'],
									'localiteProf' => $_POST['localiteProf'],
									'tva' => $_POST['tva']
								); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Incription</title>
	<meta charset='UTF-8' />
	<!--Style-->
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.css" />
	<!--Script-->
	<script src="../script/jquery-2.1.4.js"></script>
	<script src="../script/verifInscription.js"></script>
</head>
<body>
<header>
	<?php include('../header.php');?>
</header>
<section id='main'>
<div class="container">
	<h2>Validation de l'inscription</h2>
	<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
		<tr>
			<td style="font-weight: bold">
				Titre
			</td>
			<td>
				<?php echo $gender; ?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Votre login
			</td>
			<td>
				<?php echo $_POST['login'];?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Votre mot de passe
			</td>
			<td>
				<?php echo $_POST['password1'];?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Votre adresse mail
			</td>
			<td>
				<?php echo $_POST['email'];?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Votre num&eacutero de t&eacutel&eacutephone
			</td>
			<td>
				<?php echo $_POST['phone'];?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Votre fax
			</td>
			<td>
				<?php echo $_POST['fax']; ?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Adresse (rue, num&eacutero)
			</td>
			<td>
				<?php echo $_POST['adresse'];?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Code postal
			</td>
			<td>
				<?php echo $_POST['codePostal'];?>
			</td>
		</tr>
		<tr>
			<td style="font-weight: bold">
				Localit&eacute
			</td>
			<td>
				<?php echo $_POST['localite'];?>
			</td>
		</tr>
		<?php if($prof === 'Prof'){?>
		<tr>
			<td style="font-weight: bold">Nom de l'entreprise</td>
			<td><?php echo $_POST['entreprise'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold">Fonction dans la soci&eacutet&eacute</td>
			<td><?php echo $_POST['fonction'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold">Site internet &eacuteventuel</td>
			<td><?php echo $_POST['site'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold">Adresse (rue, num&eacutero)</td>
			<td><?php echo $_POST['adresseProf'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold">Code postal</td>
			<td><?php echo $_POST['codePostalProf'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold">Localit&eacute</td>
			<td><?php echo $_POST['localiteProf'];?></td>
		</tr>
		<tr>
			<td style="font-weight: bold">Num&eacutero de TVA</td>
			<td><?php echo $_POST['tva'];?></td>
		</tr>
		<?php }?>
	</table>

	<a href="../inscription.php" class="btn btn-default btn-sm" role="button">Modifier</a>
	<a href="ControlAddUser.php" class="btn btn-default btn-sm" role="button">Valider</a>

	</div>
	</div>
</div>
</section>
<footer>
	<?php include('../footer.php'); ?>
</footer>
</body>
</html>