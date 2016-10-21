<?php
//require_once "model/MessageModel.inc.php";
require_once ("../model/Database.inc.php");
/**
* La class Action est une class mère qui sera utilisé par la plupart des controller.
*/
class Action{

	private $view;
	private $model;
	protected $database;
	
	function __construct(){
		$this->view = nul;
		$this->model = nul;
		$this->database = new Database();
	}

	/**
	* Fixe la vue qui doit être affichée par le contrôleur.
	*
	* @param View $view Vue qui doit être affichée par le contrôleur.Me
	*/
	protected function setView($view) {
		$this->view = $view;
	}

	/**
	* Fixe le modèle à fournir à la vue lors de son affichage.
	*
	* @param Model $model Modèle à fournir à la vue.
	*/
	protected function setModel($model) {
		$this->model = $model;
	}
	/**
	* Récupére la pseudonyme de l'utilisateur s'il est connecté, ou null sinon.
	*	
	* @return string Pseudonyme de l'utilisateur ou null.
	*/
	public function getSessionLogin() {
		if (isset($_SESSION['login'])) {
			$login = $_SESSION['login'];
		} 
		else{
			$login = null;
		} 
		
		return $login;
	}

	public function getLogin($login,$password){
		if($this->database->loadUser($login,$password)){
			$this->setSessionLogin($login);
			$res = $this->getSessionLogin();
			return $res ;
		}
		else{
			return false;
		}
	}

	/**
	* Sauvegarde le pseudonyme de l'utilisateur dans la session.
	*
	* @param string $login Pseudonyme de l'utilisateur.
	*/
	public function setSessionLogin($login) {
		$_SESSION['login'] = $login;
	}

	/**
	* Fixe de modèle et la vue de façon à afficher un message à l'utilisateur.
	* 
	* @param string $message Message à afficher à l'utilisateur.
	*/
	protected function setMessageView(){
		$this->setModel(new MessageModel());
		$this->getModel()->setMessage($message);
		$this->getModel()->setLogin($this->getSessionLogin());
		$this->setView(getViewByName("Message"));

	}

	/**
	* Retourne la vue qui doit être affichée par le contrôleur.
	* 
	* @return View Vue qui doit être affichée par le contrôleur.
	*/
	public function getView() {
		return $this->view;
	}

	/**
	* Retourne le modèle qui doit être donnée à la vue par le contrôleur.
	*
	* @return Model Modèle à fournir à la vue.
	*/
	public function getModel() {
		return $this->model;
	}
	

}
?>