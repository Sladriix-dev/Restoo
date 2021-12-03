

<div class="NotesListe">   
    <center>
        <h2>Historique des commandes :</h2>
    </center>

<?php

//Reset le message de validation des modifs d'options
$_SESSION['MessageOptions'] = "";

// ------ Commandes -------
$ListeNotes = $UserProfile->getLoggedUserCommandes();
$IsEmpty = false;

?>
    <table align=center class=ProfilTable>
        <tbody>
    <?php

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "<tr><td><b>Commande #".$ligne->com_id."</b> : ".$ligne->rec_nom." <i>(".$ligne->com_status.")</i></td></tr> "; 
        echo "</br>";
    }

    ?>
        </tbody>
    </table>

    <?php
    if ($IsEmpty == false)
    {
        echo "<br/>(Aucune commande effectuée)";
    }
    ?>

    </br></br>
</div>

<br/>

<div class="NotesListe">
    <center><h2>Historique des paiements :</h2></center>


    <?php
    $_SESSION['mdpStatus'] = "TestCommandes";

    // ------- Factures ------
    $ListeNotes = $UserProfile->getLoggedUserFactures();
    $IsEmpty = false;

?>
    
    <table align=center class=ProfilTable>
        <tbody>
    <?php

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "<tr><td><b>Commande $nombreLignes (#".$ligne->paie_id.")</b> :  <i>(".$ligne->com_status.")</i></td></tr> "; 
        echo "</br>";
    }

    ?>
        </tbody>
    </table>

    <?php
    if ($IsEmpty == false)
    {
        echo "<br/>(Aucun paiement effectué)";
    }
    ?>

    </br></br>
</div>