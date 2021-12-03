<?php 
require_once "../../vendor/autoload.php";
//include_once "../../App/Entite/User.php";
//include_once "../../App/Controller/UserProfile.php";
use App\Controller\UserProfile;

?>

<div class="NotesListe">
    <h2>Notes de Restaurants :</h2>


    <?php
    // Récupération des notes via la classe
    //Notes de restau 
    $UserProfile = new UserProfile();
    $ListeNotes = $UserProfile->getLoggedUserNotes(1);
    //while($ligne=$UserProfile->fetch())

    foreach ($ListeNotes as $ligne)
    {
        echo "<b>".$ligne->restau_nom."</b> <i>(".$ligne->note_score.")</i> ";
        //echo $ligne['restaurant.restau_nom'] . " : (" . $ligne['note.note_score'] . ") ";
        // var_dump($ligne->context);
        echo "<br/>";
    }
    echo "<br/>";


    ?>
</div>

<br/>

<div class="NotesListe">
    <h2>Notes de Recettes :</h2>

    <?php

    $ListeNotes = $UserProfile->getLoggedUserNotes(2);

    foreach ($ListeNotes as $ligne)
    {
        echo "<b>".$ligne->rec_nom."</b> <i>(".$ligne->note_score.")</i><br /> ";   
    }
    echo "<br />";

    ?>
</div>