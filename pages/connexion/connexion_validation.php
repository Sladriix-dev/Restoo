<?php

require '../header.php';

use App\Controller\ConnexionController;
require ROOT."/vendor/autoload.php";

// require ROOT. "../vendor/autoload.php";


    //Récupération des données issues de la page inscription
    $email = $_POST['email']; 
    $password = $_POST['password'];  

    //On envoie les données du formulaire à la classe pour vérifier que l'utilisateur a renseigné les bons identifiants.
    $login = new ConnexionController();
    $connexion = $login->connexion($email, $password);   


?>