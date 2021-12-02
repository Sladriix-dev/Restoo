<?php

require '../header.php';

use App\Controller\ConnexionController;
require ROOT."/vendor/autoload.php";

// require ROOT. "../vendor/autoload.php";

if($_POST['login']){  

    //Récupération des données issues de la page inscription
    $email = $_POST['email']; 
    $password = $_POST['password'];  

    //On envoie les données du formulaire à la classe pour vérifier que l'utilisateur a renseigné les bons identifiants.
    $login = new ConnexionController();
    $connexion = $login->connexion($email, $password);  
    
    if($connexion){  
        $_SESSION['alert'] = "<div class='alert'>Connexion réussi !</div>";
        echo '<script type="text/javascript">
        window.location = "../../pages/accueil/index.php"
        </script>';       
    }
    else{  
        $_SESSION['alert'] = "<div class='alert'>La connexion à échoué !</div>";
        echo '<script type="text/javascript">
        window.location = "connexion.php"
        </script>';         
    }
            
    
}

?>