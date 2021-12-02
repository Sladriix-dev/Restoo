<?php 
require_once "../../vendor/autoload.php";
//include_once "../../App/Entite/User.php";
//include_once "../../App/Controller/UserProfile.php";
use App\Controller\UserProfile;

//Reset le message de validation des modifs d'options
$_SESSION['mdpChange'] = false;

?>

<div class="NotesListe">
    
    <h2>Notes de Restaurants :</h2>


    <?php
    // Récupération des notes via la classe
    //Notes de restau 
    $UserProfile = new UserProfile();
    $ListeNotes = $UserProfile->getLoggedUserNotes(1);
    //while($ligne=$UserProfile->fetch())

    $IsEmpty = false;

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "Vous avez donné la note de <b>".$ligne->note_score."/10</b> au restaurant <i>".$ligne->restau_nom."</i> ";
        //echo $ligne['restaurant.restau_nom'] . " : (" . $ligne['note.note_score'] . ") ";
        // var_dump($ligne->context);
        echo "<br/>";
    }

    if ($IsEmpty == false)
    {
        echo "<br/>(Vous n'avez pas noté le restaurant)";
    }

    echo "<br/>";


    ?>
</div>

<br/>

<div class="NotesListe">
    <h2>Notes de Recettes :</h2>

    <?php

    $ListeNotes = $UserProfile->getLoggedUserNotes(2);
    $IsEmpty = false;

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "Vous avez donné la note de <b>".$ligne->note_score."/10</b> à notre <i>".$ligne->rec_nom."</i><br /> ";   
    }
    echo "<br />";


    if ($IsEmpty == false)
    {
        echo "<br/>(Vous n'avez pas noté nos recettes)";
    }

    ?>
</div>