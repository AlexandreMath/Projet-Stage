<?php
require ('model.inc.php');
/** 
* La class MessageModel sert à créer un objet message pour pouvoir l'utiliser dans d'autre script.
*/
class MessageModel extends Model{

	/**
	* @var string Message à afficher à l'utilisateur.
	*/
	private $message;
	
	/** 
	 * Construit une instance de la classe 'MessageModel'.
	 * Initialise la propriété $message à une chaine vide.
	 */
	function __construct(){
		$this->message ="";
	}

	/**
	* Retourne le message stocké dans le modèle.
	* 
	* @return string $message: Message stocké dans le modèle.
	*/
	public function getMessage(){
		return $this->message;
	}

	/**
	* Affecte un message au modèle.
	* 
	* @param string $message: Message à stocké dans le modèle.
	*/
	public function setMessage($message){
		$this->message = $message;
	}
}
?>