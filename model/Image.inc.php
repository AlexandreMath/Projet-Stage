<?php
/**
* Objet Image 
*/
class Image{
	public $idTerrain;
	public $src;
	public $legende;
	
	public function __construct($idTerrain, $src, $legende){
		$this->idTerrain = $idTerrain;
		$this->src = $src;
		$this->legende = $legende;

	}

	public function getIdTerrain(){
		return $this->idTerrain;
	}
	
	public function getSrc(){
		return $this->src;
	}

	public function getLegende(){
		return $this->legende;
	}
}
?>