<?php

require '../header.php';


use App\Entité\User;
require ROOT."/vendor/autoload.php";

// require ROOT. "../vendor/autoload.php";


    //Récupération des données issues de la page inscription
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];  
    $emailConfirm = $_POST['email'];  
    $password = $_POST['password'];  
    $confirmPassword = $_POST['confirmPassword'];
    $adresse = $_POST['adresse'];  
    $adresse = str_replace('\'', '', $adresse);
    $cp = $_POST['cp'];  
    $telephone = $_POST['telephone'];  
    $genre = $_POST['gender'];  

    if($password == $confirmPassword){  
        //On vérifie que l'adresse email de l'utilisateur n'est pas déjà présente dans la BDD
        $user = new User($nom, $prenom, $emailConfirm, $password, $adresse, $cp, $telephone, $genre);  
        $email = $user->userExist($emailConfirm); 
        if(!$email){  
                echo 'OK';
                $register = $user->inscriptionUtilisateur();  
                if($register){  
                    $_SESSION['alert'] = "<div class='alert'>Inscription réussi !</div>";
                    // echo '<script type="text/javascript">
                    // window.location = "../../pages/accueil/index.php"
                    // </script>'; 
                }else{  
                    $_SESSION['alert'] = "<div class='alert'>Connexion réussi !</div>";
                    echo '<script type="text/javascript">
                    window.location = "inscription_validation.php"
                    </script>'; 
                }
            }
        else {
            echo "<div class='alert'>L'adresse email est déjà existante ' !</div>";  
            header("Location: ", "/pages/inscription.php"); /* Redirection du navigateur */
        }
    }


?>