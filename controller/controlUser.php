<?php
require ('model/Database.inc.php');

//Verification que les variables envoyées avec la méthode POST ne sont pas vide et 
if(!empty($_POST['login']) && !empty($_POST['password1']) && !empty($_POST['password2']) && !empty($_POST['email'])){
	$login = htmlentities($_POST['login']);
	$email = htmlentities($_POST['email']);
	
	if($_POST['password1'] === $$_POST['password2'])){
		$password = htmlentities($_POST['password1']);
	}				
	
	else{
		return 'Les mots de passes ne correspondes pas!';
	}

	$database = new Database();
	/* appel de la function addUser de la DB, cette fonction fait la verification si l'utilisateur n'est déjà pas dans la DB
	* et verifie aussi si l'adresse mail est correcte.
	*/
	if($this->database->addUser($login, $password, $email)){
		return 'Isncription réussi!'
	}
	else{
		return 'Désolé, nous n\'avons pas pu vous inscrire.';
	}

}
?>