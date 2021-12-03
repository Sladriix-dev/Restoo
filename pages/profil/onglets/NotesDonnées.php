
<?php 

require_once "../../vendor/autoload.php";
use App\Controller\UserProfileController;

//Reset le message de validation des modifs d'options
$_SESSION['MessageOptions'] = "";

?>

<div class="NotesListe">
    
    <center><h2>Notes de Restaurants :</h2></center>


    <?php
    // Récupération des notes via la classe
    //Notes de restau 
    $UserProfile = new UserProfileController();
    $ListeNotes = $UserProfile->getLoggedUserNotes(1);
    $IsEmpty = false;

    ?>
    <table align=center class=ProfilTable>
        <tbody>
    <?php

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "<tr><td>Vous avez donné la note de <b>".$ligne->note_score."/10</b> au restaurant <i>".$ligne->restau_nom."</i> </td></tr>";
        //echo $ligne['restaurant.restau_nom'] . " : (" . $ligne['note.note_score'] . ") ";
        // var_dump($ligne->context);
        echo "<br/>";
    }

    ?>
        </tbody>
    </table>

        <?php

    if ($IsEmpty == false)
    {
        echo "<br/>(Vous n'avez pas noté le restaurant)";
    }

    echo "<br/>";


    ?>
</div>

<br/>

<div class="NotesListe">
    <center><h2>Notes de Recettes :</h2></center>

    <?php

    $ListeNotes = $UserProfile->getLoggedUserNotes(2);
    $IsEmpty = false;

    ?>
<table align=center class=ProfilTable>
    <tbody>
    <?php

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "	<tr><td>Vous avez donné la note de <b>".$ligne->note_score."/10</b> à notre <i>".$ligne->rec_nom."</i></td></tr><br /> ";   
    }
  

    ?>
        </tbody>
    </table>

        <?php

    if ($IsEmpty == false)
    {
        echo "<br/>(Vous n'avez pas noté nos recettes)";
    }

    ?>
</div>