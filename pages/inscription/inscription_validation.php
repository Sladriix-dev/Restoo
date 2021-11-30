<?php

use App\User\User;
require ROOT."/vendor/autoload.php";

// require ROOT. "../vendor/autoload.php";

if($_POST['register']){  

    //Récupération des données issues de la page inscription
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];  
    $emailConfirm = $_POST['email'];  
    $password = $_POST['password'];  
    $confirmPassword = $_POST['confirmPassword'];
    $adresse = $_POST['adresse'];  
    $cp = $_POST['cp'];  
    $telephone = $_POST['telephone'];  
    $genre = $_POST['genre'];  

    if($password == $confirmPassword){  
        //On vérifie que l'adresse email de l'utilisateur n'est pas déjà présente dans la BDD
        $user = new User($nom, $prenom, $emailConfirm, $password, $adresse, $cp, $telephone, $genre);  
        $email = $user->userExist($emailConfirm); 
        if(!$email){  
                $register = $user->inscriptionUtilisateur();  
                if($register){  
                    $_SESSION['alert'] = "<div class='alert'>Inscription réussi !</div>";
                    header("Location: ", ROOT."/pages/restaurant.php"); /* Redirection du navigateur */

                }else{  
                    $_SESSION['alert'] = "<div class='alert'>L'inscription à échoué !</div>";
                    header("Location: ", ROOT."/pages/inscription.php"); /* Redirection du navigateur */
                }
            }
        else {
            echo "<div class='alert'>L'adresse email est déjà existante ' !</div>";  
            header("Location: ", ROOT."/pages/inscription.php"); /* Redirection du navigateur */
        }
    }
}

?>