
<div class="NotesListe">
    
    <h2>Historique des commandes :</h2>

<?php

//Reset le message de validation des modifs d'options
$_SESSION['mdpChange'] = false;

    // ------ Commandes -------
    $ListeNotes = $UserProfile->getLoggedUserCommandes();

    $IsEmpty = false;

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "<b>Commande #".$ligne->com_id."</b> : ".$ligne->rec_nom." <i>(".$ligne->com_status.")</i> "; 
        echo "</br>";
    }

    if ($IsEmpty == false)
    {
        echo "<br/>(Aucune commande effectuée)";
    }

?>
</br></br>
</div>

<br/>

<div class="NotesListe">
    <h2>Historique des paiements :</h2>
    <?php
$_SESSION['mdpStatus'] = "TestCommandes";
    // ------- Factures ------
    $ListeNotes = $UserProfile->getLoggedUserFactures();

    $IsEmpty = false;

    foreach ($ListeNotes as $ligne)
    {
        $IsEmpty = true;
        echo "<b>Commande $nombreLignes (#".$ligne->paie_id.")</b> :  <i>(".$ligne->com_status.")</i> "; 
        echo "</br>";
        
    }

    if ($IsEmpty == false)
    {
        echo "<br/>(Aucun paiement effectué)";
    }
    ?>
</br></br>
</div>