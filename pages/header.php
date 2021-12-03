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

    <!-- Insertion de Jquery et de Datatables -->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.data"></script>

    <!-- Insertion des liens de styles et de fonts -->
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@300&family=Outfit:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav>
            <ul class="header-display">
                <img src="../../asset/Logo_Restoo.png" alt="Logo du restau">
                <a href="../accueil/index.php">Accueil</a>
                <a href="../recettes/recettes.php">Liste des recettes</a>
                <?php 
                //Si l'utilisateur est administrateur, alors l'accès administrateur s'affiche

    
                //Si l'utilisateur n'est pas connecté, il peut s'inscrire ou se déconnecter
                if (isset($_SESSION['util_nom'])) {
                    if (isset($_SESSION['util_isAdmin'])) {
                        echo '<a href="../admin/admin.php">Admninistration</a>';
                    }
                    echo '<a href="../profil/profil.php">Bienvenue, '.$_SESSION['util_nom'].'</a>';
                    echo '<a href="../deconnexion/deconnexion.php">Déconnexion</a>';
                    echo '<a href="../panier/panier.php">Panier</a>';

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