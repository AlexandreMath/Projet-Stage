<?php
/**
* 
*/
class Search{
	private $nom;
	private $codePostal;
	private $localite;
	private $region;


	public function __construct($nom, $codePostal, $localite, $region){
		$this->nom = $nom;
		$this->$codePostal = $codePostal;
		$this->localite = $localite;
		$this->region = $region;
	}
	/*Cette fonction insert dans un tableau les données envoyé par l'utilisateur
	*
	*/
	public function insertInTab(){
		$dataTab = array();

		if(!empty($this->nom)){
			array_push($dataTab, $this->nom);
		}
		if(!empty($this->codePostal)){
			array_push($dataTab, $this->codePostal);
		}
		if(!empty($this->localite)){
			array_push($dataTab, $this->localite);
		}
		if(!empty($this->region)){
			array_push($dataTab, $this->region);
		}
		if(!empty($dataTab)){
			return $data;
		}

	}

}
?>