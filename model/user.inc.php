<?php
/**
* 
*/
class User{
	//le  de user
	public $gender;
	//le nom du user
	public $login;
	//mot de passe
	public $password;
	//l'adresse mail
	public $email;
	//le numéro de téléphone
	public $phone;
	//le fax 
	public $fax;
	//adresse (rue, numero)
	public $adresse;
	//Son code postal
	public $codePostal;
	//la localité
	public $localite;
	//professionnel
	public $professionnel;
	//le nom de l'entreprise
	public $entreprise;
	// sa fonction dans l'entreprise
	public $fonction;
	//le numéro de tva
	public $tva;
	//adresse de l'entreprise(rue, numero)	
	public $adresseProf;
	//le code postal de l'entreprise
	public $codePostalProf;
	//la localité de l'entreprise
	public $localiteProf;

	function __construct($gender,$login, $password, $email, $phone, $fax, $adresse, $codePostal, $localite, $professionnel, $entreprise, $fonction, $tva, $adresseProf, $codePostalProf, $localiteProf){
		$this->gender = $gender;
		$this->login = $login;
		$this->password = $password;
		$this->email = $email;
		$this->phone = $phone;
		$this->fax = $fax;
		$this->adresse = $adresse;
		$this->codePostal = $codePostal;
		$this->localite = $localite;
		$this->professionnel = $professionnel;
		$this->entreprise = $entreprise;
		$this->fonction = $fonction;
		$this->tva = $tva;
		$this->adresseProf = $adresseProf;
		$this->codePostalProf = $codePostalProf;
		$this->localiteProf = $localiteProf;
	}

	/**
	* Retourne le genre de l'utilisateur 
	* 
	*/
	public function getGender(){
		return $this->gender;
	}

	/**
	* Retourne le login de l'utilisateur 
	* 
	* @return
	*/
	public function getLogin(){
		return $this->login;
	}

	/**
	* Retourne le password de l'utilisateur 
	* 
	* @return 
	*/
	public function getPassword(){
		return $this->password;
	}

	/**
	* Retourne l'email de l'utilisateur 
	* 
	* @return 
	*/
	public function getEmail(){
		return $this->email;
	}

	/**
	* Retourne le numero de téléphone de l'utilisateur 
	* 
	* @return
	*/
	public function getPhone(){
		return $this->phone;
	}

		/**
	* Retourne le numero de téléphone de l'utilisateur 
	* 
	* @return
	*/
	public function getFax(){
		return $this->fax;
	}

	/**
	* Retourne l'adresse de l'utilisateur 
	* 
	* @return 
	*/
	public function getAdresse(){
		return $this->adresse;
	}

	/**
	* Retourne le code postal de l'utilisateur 
	* 
	* @return 
	*/
	public function getCodePostal(){
		return $this->codePostal;
	}

	/**
	* Retourne la localite de l'utilisateur 
	* 
	* @return 
	*/
	public function getLocalite(){
		return $this->localite;
	}

	/**
	* Retourne la localite de l'utilisateur 
	* 
	* @return 
	*/
	public function getProfessionnel(){
		return $this->professionnel;
	}

	/**
	* Retourne le nom de l'entreprise de l'utilisateur 
	* 
	* @return le nom ou une chaine vide si il n'y a pas d'entreprise
	*/
	public function getEntreprise(){
		return $this->entreprise;
	}

	/**
	* Retourne la fonction de l'utilisateur dans l'entreprise
	* 
	* @return 
	*/
	public function getFonction(){
		return $this->fonction;
	}

	/**
	* Retourne le numéro de tva de l'utilisateur 
	* 
	* @return 
	*/
	public function getTva(){
		return $this->tva;
	}

	/**
	* Retourne l'adresse de l'entreprise de l'utilisateur 
	* 
	* @return 
	*/
	public function getAdresseProf(){
		return $this->adresseProf;
	}

	/**
	* Retourne le code postal de l'entreprise de l'utilisateur 
	* 
	* @return 
	*/
	public function getCodePostalProf(){
		return $this->codePostalProf;
	}

	/**
	* Retourne la localité de l'entreprise de l'utilisateur 
	* 
	* @return 
	*/
	public function getLocaliteProf(){
		return $this->localiteProf;
	}



}
?>