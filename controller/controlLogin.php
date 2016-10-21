<?php
session_start();
require_once ("../model/Database.inc.php");

	/**
    * Traite les données envoyées par le visiteur via le formulaire de connexion
    * (variables $_POST['login'], $_POST['password']).
    * Le login est vérifié en utilisant les méthodes de la classe Database.  
    * L'adresse mail, est aussi vérifié en utilisant les méthodes de la classe Database.
    * Si la vérification est réussie,
    * le pseudo est affecté à la variable de session et au modèle.
    */


        if(!empty($_POST['user']) && !empty($_POST['password'])){
            
            $login = htmlentities($_POST['user']);
            $password = htmlentities($_POST['password']);
            

            //Création de l'objet database
            $Database = new Database();

            if($Database->User($login, $password)){
                $id = $Database->loadProprietaire($login);
                $_SESSION ['Auth'] = array(
                    'id_user' => $id,
                    'login'=>$login,
                    'password' =>$password
                );
                header('Location: ../index.php');
            }
            else{
                echo 'Vous n\'êtes pas inscrit';
            }
        }
        else{
            echo 'Il manque une donnée';
        }

?>