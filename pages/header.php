<?php 

require '../../config.php';
require '../../Root.php';
require ROOT."/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Insertion des liens de styles et de fonts -->
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@300&family=Outfit:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav>
            <ul>
                <a href="../accueil/index.php">Accueil</a>
                <a href="../recettes/recettes.php">Liste des recettes</a>
                <?php 
                //Si l'utilisateur est administrateur, alors l'accès administrateur s'affiche
                if (isset($_SESSION['util_isAdmin'])) {
                    echo '<a href="../admin/admin.php">Admnistration</a>';
                }
                //Si l'utilisateur n'est pas connecté, il peut s'inscrire ou se déconnecter
                if (isset($_SESSION['util_nom'])) {
                    echo '<a href="">Bienvenue, '.$_SESSION['util_nom'].'</a>';
                    echo '<a href="../deconnexion/deconnexion.php">Déconnexion</a>';
                } 

                else {
                    echo '<a href="../connexion/connexion.php">Connexion</a>
                    <a href="../inscription/inscription.php">Inscription</a>';
                }
                
                ?>
            </ul>
        </nav>
    </header>
    <div id="margin-top">

