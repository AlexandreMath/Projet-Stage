<?php
require ('verifEmail.php');

/*Class qui sert à la connexion à la DB,
* mais aussi à inserer un nouveau utilisateur, de nouveaux terrains
*/
class Database{

	private $connection;

	public function __construct(){
		$this->connection = new PDO('mysql:host=localhost; dbname=', 'root','root');

		// En cas d'erreur de connection, on coupe tout et on affiche un message d'erreur
		if (!$this->connection) {
			die("impossible d'ouvrir la base de données");
		}

	}
	/*Cette function verifie que l'utilisateur est dans la DB
	* return true quand il y est. 
	* return false si il n'y est pas.
	*/
	private function checkUser($user){
		$sql = "SELECT * FROM users WHERE user='$user'";
		$prepare = $this->connection->prepare($sql);
        $prepare-> execute();
        $resultat = $prepare->rowCount();
        if($resultat === 0){
        	return true;
        }
        else{
        	return false;
        }
    }
	/*Cette function verifie que l'adresse mail est correct. Elle appelle la fonction verifEmail.
	*Celle-ci utilise un regex pour la verification.
	*Puis on verifie que l'adresse mail n'est déjà pas utilisé par un autre user
	*/
    private function checkMail($mail){
      	if(verifEmail($mail)){
      		$sql = "SELECT * FROM users WHERE mail = '$mail' ";
      		$prepare = $this->connection->prepare($sql);
      		$prepare->execute();
        	$resultat = $prepare->rowCount();
        	if($resultat > 0){
      			return false; //'désolé, l\'adresse mail est déjà dans la DB' ;		
      		}
      		//Si l'adresse mail n'est pas dans la DB, return true.
      		else{
      			return true;
      		}       		
       	}
       	//Si l'adresse mail n'est pas valide.
       	else{
      		return false;
       	}
    }


	/* 
	* AddUser sert à ajouter un utilisateur dans la DB 
	* cette fonction utilise checkUser pour verifier qu'il n'est déjà pas dans la DB
	*/
	public function addUser($utilisateur){
		//Vérification du user 
		if(!$this->checkUser($utilisateur->login)){
			return  false; //'Cet utilisateur existe déjà';
		}

		//verification de l'adresse mail
		if(!$this->checkMail($utilisateur->email)){
			return  false; //'Mauvaise adresse mail';
		}
		
		//Ajout de l'utilisateur dans la DB
		$sql = "INSERT INTO users (gender, user, password, mail, phone, fax, adresse, codePostal, localite, professionnel, entreprise, fonction, tva, adresseProf, codePostalProf, localiteProf) VALUES 
								  ('$utilisateur->gender', '$utilisateur->login', '$utilisateur->password', '$utilisateur->email', '$utilisateur->phone', '$utilisateur->fax', '$utilisateur->adresse', '$utilisateur->codePostal', '$utilisateur->localite','$utilisateur->professionnel', '$utilisateur->entreprise ', '$utilisateur->fonction', '$utilisateur->tva', '$utilisateur->adresseProf', '$utilisateur->codePostalProf', '$utilisateur->localiteProf') ";
		$prepare = $this->connection->prepare($sql);
		$resultat = $prepare->execute(); 
		

        // Si l'utilisateur a bien été ajouté dans la DB, renvoie TRUE sinon FALSE
        if ($resultat == true) {
            return true;
        } else {
            return false;  
        }  

    }
    /* Cette fonction sert à selectionné un utilisateur dans la DB.
	* Cette fonction est utilisé pour pourvoir se connecter.
    */
    public function User($user, $password){
	 		try {			
	 			$sql = "SELECT * FROM users WHERE user='$user' AND password='$password'";
	 			$prepare = $this->connection->prepare($sql);
	 			$prepare->execute();

	 			return true;

			}
	 		catch(Exception $e) {
	 			throw new exception ($e);
	 		}

 	}
    /*
    * Cette fonction sert à selectionner un utilisateur dans la DB et renvoie le resultat sous forme d'objet.
    */
 	public function loadUser($idUser){
	 		try {			
	 			$sql = "SELECT * FROM users WHERE id='$idUser'";
	 			$prepare = $this->connection->prepare($sql);
	 			$prepare->execute();
	 			$resultat = $prepare->fetchAll(PDO::FETCH_OBJ);

	 			return $resultat;

			}
	 		catch( Exception $e) {
	 			throw new exception ($e);
	 		}

 	}

 	/*
 	* Cette fonction sert à modifier les informations d'un user
 	*/
 	public function updateUser($idUser, $user, $password, $mail){
 		try{
 			$sql = "UPDATE users SET user='$user', password='$password', mail='$mail' WHERE id = '$idUser'";
 			$prepare = $this->connection->prepare($sql);
 			$prepare->execute();

 			return true;
 			
 		} 
 		catch (Exception $e) {
 			throw new exception($e);
 		}

 	}

 	/*
 	*Cette function sert à chercher l'id du proprietaire et la renvoie.
 	*/
 	public function loadProprietaire($proprietaire){
 		
 		$sql = "SELECT id FROM users WHERE user = '$proprietaire'";
 		$prepare = $this->connection->prepare($sql);
 		$prepare->execute();
 		$resultat = $prepare->fetchAll(PDO::FETCH_OBJ);	
 		if($prepare->rowCount() === 1){
 			return $resultat[0]->id;
 		}
 		else{
 			return false;
 		}
 		
 	}

 	/* addTerrain ajoute un terrain dans la DB. 
 	* dateAjout correspond au mois de l'ajout du terrain dans la DB.
 	*/
 	public function addTerrain($terrain){

  		//Recupere l'id de l'utilisateur
 		$idProprietaire = $this->loadProprietaire($terrain->proprietaire);

 		$sql = "INSERT INTO terrains (idProprietaire, prix, rue, codePostal, ville, detail, description, longitude, latitude, dateAjout) VALUES 
 									 ('$idProprietaire', '$terrain->prix', '$terrain->rue', '$terrain->codePostal','$terrain->ville','$terrain->detail', '$terrain->description', '$terrain->longitude','$terrain->latitude', '$terrain->dateAjout')";
 		$prepare = $this->connection->prepare($sql);
 		$resultat =$prepare->execute();
 		if($resultat === true ){
 			return true;
 		}
 		else{
 			return false;
 		}
 		

 	}
 	/* 
	* Cette fonction sert à récupérer l'id d'un terrain
 	*/
 	public function loadIdTerrain($longitude, $latitude){
	 	$sql = "SELECT id FROM terrains WHERE longitude = '$longitude' AND latitude = '$latitude'";
 		$prepare = $this->connection->prepare($sql);
 		$prepare->execute();
 		$resultat = $prepare->fetchAll(PDO::FETCH_OBJ);	
 		if($prepare->rowCount() === 1){
 			return $resultat[0]->id;
 		}
 		else{
 			return false;
 		}
 	}

	/*
 	*Cette fonction sert à sauvegader des images dans la DB
 	*/
	public function addImage($image){
		$sql = "INSERT INTO imagesTerrain (idTerrain, src, legende) VALUES ('$image->idTerrain', '$image->src', '$image->legende')";
		$prepare = $this->connection->prepare($sql);
		$resultat = $prepare->execute();

 		if($resultat === true){
 			return true;
 		}
 		else{
 			return false;
 		}

	}

	/*
 	*Cette fonction sert à sauvegader l'image principale dans la DB
 	*/
	public function addPrincipalImage($image){
		
		$sql = "INSERT INTO imagePrincipal (idTerrain, src, legende) VALUES ('$image->idTerrain', '$image->src', '$image->legende')";
		$prepare = $this->connection->prepare($sql);
		$resultat = $prepare->execute();

 		if($resultat === true ){
 			return true;
 		}
 		else{
 			return false;
 		}

	}
	/*
	*
	*/
	public function loadImagePrincipal($idTerrain){
		$sql = "SELECT * FROM imagePrincipal WHERE idTerrain = '$idTerrain'";
		$prepare = $this->connection->prepare($sql);
		$prepare->execute();
		$objres = $prepare-> fetchAll(PDO::FETCH_OBJ);
		return $objres[0]->src;
	}

 	/*
 	* Cette fonction sert à modifier les informations d'un terrain
 	*/
 	public function updateTerrain($prix, $rue, $codePostal,$ville, $detail, $description, $idTerrain){   
 	 		try{
 			$sql = "UPDATE terrains SET prix='$prix', rue='$rue', codePostal='$codePostal', ville='$ville', detail='$detail', description='$description'  WHERE id = '$idTerrain'";
 			$prepare = $this->connection->prepare($sql);
 			$prepare->execute();

 			return true;
 			
 		} 
 		catch (Exception $e) {
 			throw new exception($e);
 		}
 	
 	}

 	/* 
	* Cette function sert à chercher un terrain
 	*/
	public function loadTerrainBySearch($sql){
		$prepare = $this->connection->prepare($sql);
		$prepare->execute();
		$result = $prepare->fetchAll(PDO::FETCH_OBJ);

		if($result) {
			return $result;
		}
		else{
			return 'Aucun terrain trouvé';
		}

	}
	/*
	* Cette function sert à chercher un terrain par propriétaire
	* La fonction renvoie tout les terrains du propriétaire.
 	*/
	public function loadTerrainByProprietaire($proprietaire){
		$sql = "SELECT * FROM terrains WHERE idProprietaire = '$proprietaire'";
		$prepare = $this->connection->prepare($sql);
		$prepare->execute();
		$res = $prepare->fetchAll(PDO::FETCH_ASSOC);					//PDO::FETCH_ASSOC: retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats.

		if($res) {
			
			return $res;	
		}
		else{
			return false;
		}

	}

	/* 
	* Cette fonction sert à chercher un terrain par son id
	*/
	public function loadTerrainById($idTerrain){
		$sql = "SELECT * FROM terrains WHERE id = '$idTerrain'";
		$prepare = $this->connection->prepare($sql);
		$prepare->execute();
		$tabRes = $prepare->fetchAll(PDO::FETCH_ASSOC);

		if($tabRes == true) {
			return $tabRes;	
		}
		else{
			return 'Aucun terrain trouvé';
		}
	}
	
}
?>