<?php
/** Cette class sert à créer un model terrain.
* Un model terrain contien un proprietaire, des details sur le terrain,
*Et une adresse, qui peut comprendre l'adresse, la vile, 
*/
class Terrain{
	
	//Contient le nom du propriétaire du terrain
	public $proprietaire;
	
	//Contient le prix du terrain
	public $prix;

	//contient la rue du terrain
	public $adresse;

	//contient le code postal du terrain
	public $codePostal;

	//contient la ville du terrain
	public $ville;

	//contient les détails du terrain
	public $detail;
	
	//contient la description du terrain
	public $description;
	
	//Contient la longitude du terrain
	public $longitude;

	//Contient la latitude du terrain
	public $latitude;

	//Contient la date d'ajout du terrain
	public $dateAjout;


	public function __construct( , $longitude, $latitude, $dateAjout){
		
		
		
		
		$this->longitude = $longitude;
		$this->latitude = $latitude;
		$this->dateAjout = $dateAjout;
	}
	
	/**
	* Retourne le propiétaire du terrain 
	* 
	* @return string|propriétaire du terrain
	*/
	public function getProprietaire(){
		return $this->proprietaire;
	}

	/**
	* Retourne le propiétaire du terrain 
	* 
	* @return string|propriétaire du terrain
	*/
	public function getPrix(){
		return $this->prix;
	}


	/**
	* Retourne l'adresse du terrain
	*/
	public function getAdresse(){
		return $this->adresse;
	}

	/**
	* Retourne les détails lié au terrain
	*/
	public function getCodePostal(){
		return $this->codePostal;
	}

	/**
	* Retourne les détails lié au terrain
	*/
	public function getVille(){
		return $this->ville;
	}

	/**
	* Retourne les détails lié au terrain
	*/
	public function getDetail(){
		return $this->detail;
	}

	/**
	* Retourne la description du terrain
	*/
	public function getDescription(){
		return $this->description;
	}
		
	/**
	* Retourne la description du terrain
	*/
	public function getLongitude(){
		return $this->longitude;
	}

	/**
	* Retourne la description du terrain
	*/
	public function getLatitude(){
		return $this->latitude;
	}

	/**
	* Retourne la date d'incription du terrain 
	* c'est pour savoir depuis combien de temps il est sauvegarder dans la DB
	* à réactiver après 3 mois. (Voir doc)
	* @return date
	*/
	public function getDateAjout(){
		return $this->dateAjout;
	}
	
	/*
	*
	*/
	public function setProprietaire($proprietaire){
		$this->proprietaire = $proprietaire;
	}
	
	/*
	*
	*/
	public function setPrix($prix){
		$this->prix = $prix;
	}
	
	/*
	*/
	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

	/*
	*
	*/
	public function setCodePostal($codePostal){
		$this->codePostal = $codePostal;
	}
	/*
	*/
	public function setVille($ville){
		$this->ville = $ville;
	}
	/*
	*/
	public function setDetail($detail){
		$this->detail = $detail;
	}

	/*
	*/
	public function getDescription($description){
		
		$this->description = $description;
	}

	/*
	*/
	public function setProprietaire(){

	}

	
}
?>