<?php
/**La class Model sert à créer un objet qui contient l'utilisateur.
* Si il est conneté la vue sera affiché et les options qui y sont liées
*/
class Model{
	/**
	 * @var string|null Pseudonyme de l'utilisateur qui affiche la vue ou null
	 * S'il n'est pas connecté.
	 */
	protected $login;

	/**
	 * @var string Contient un possible message issu d'une erreur de connexion.
	 */
	protected $loginError;

	/**
	 * Construit une instance de la classe 'Model'.
	 * Initialise les variables $login et $loginError.
	 */
	function __construct(){
		$login = nul;
		$oginError = "";
	}

	/**
	 * Retourne le pseudonyme de l'utilisateur qui affiche la page
	 * ou null s'il n'est pas connecté.
	 * 
	 * @return string|null Pseudonyme de l'utilisateur ou null.
	 */
	public function getLogin(){
		return $this->login;
	}

	/**
	 * Affecte le pseudonyme de l'utilisateur au modèle.
	 * Cette méthode doit être utilisée par les actions
	 * lors de la construction du modèle. 
	 * 
	 * @param string $login Pseudonyme de l'utilisateur.
	 */
	public function setLogin($login){
		$this->login = $login;
	}

	 /**
	 * Retourne le possible message issu d'une erreur de connexion.
	 * 
	 * @param string Message d'erreur ou "".
	 */
	public function getLoginError(){
		return $this->loginError;
	}

	/**
	 * Affecte un message issu d'une erreur de connexion au modèle.
	 *
	 * @param string Message d'erreur.
	 */
	public function setLoginError($loginError){
		$this->loginError = $loginError;
	}
}
?>