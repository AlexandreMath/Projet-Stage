<?php
session_start();
require ('../model/Database.inc.php');

if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email'])){
	$database = new Database();

	$idUser = $_SESSION['Auth']['id_user'];
	$login = htmlentities($_POST['login']);
	$password = htmlentities($_POST['password']);
	$email = htmlentities($_POST['email']);
	if($database->updateUser($idUser, $login, $password, $email)){
		echo "données ont été enregistrée";
	}
}
else{
	echo "données manquantes";
}

?>