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
    <link src="C:\Users\DCHML\OneDrive\Bureau\Travail\IPSSI\3x1\Restoo\css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Connexion et inscription</h1>
        <nav>
            <ul>
                <a href="../connexion/connexion.php">Connexion</a>
                <a href="../inscription/inscription.php">Inscription</a>
                <a href="../recettes/recettes.php">Liste des recettes</a>

            </ul>
        </nav>
</body>
<style>

.header {
    width: 100%;
    height: 70px;
    display: flex;
    position: fixed;
    font-size: 20px;
    margin-top: -8px;
    margin-left: -8px;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(90deg, black, 90%, white);
}

.header a {
    color: white;
    padding: 10px 100px;
    text-decoration: none;
}

.header a:hover {
    text-decoration: underline;
    text-shadow: 1px 3px 5px white;
}

.header-logo {

}

</style>