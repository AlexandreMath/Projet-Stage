<?php
session_start();
require ('../model/Database.inc.php');
require ('../model/Image.inc.php');

$dossier = 'imagesTerrain/';
$fichier = basename($_SESSION['Auth']['login'].$_FILES['imageTerrain']['name']);
$taille_maxi = 2000000;
$taille = filesize($_FILES['imageTerrain']['tmp_name']);
$extensions = array('.jpg', '.jpeg');
$extension = strrchr($_FILES['imageTerrain']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type  jpg, jpeg';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['imageTerrain']['tmp_name'], '../'.$dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {    
          //creation de la connexion à la DB
          $Database = new Database();

          $idTerrain = $Database->loadIdTerrain($_SESSION['longitude'], $_SESSION['latitude']);
          $_SESSION['idTerrain'] = $idTerrain;
          $src = $dossier.$fichier;
          $legende = htmlentities($_POST['legende']);

          //Creation d'un objet image
          $ObjImage = new Image($idTerrain, $src,$legende);

          if($Database->addImage($ObjImage)){
               echo 'Upload effectué avec succès !';
          }
          
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
?>